<?php

namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JobOrder;
use App\Technician;
use App\Customer;
use App\ServiceList;
use App\Inspection;
use App\VehiclePart;
use App\JobService;
use App\JobTechnician;
use App\ServicePerformed;
use App\ServicePart;
use App\Step;
use Validator;
use DB;

use Illuminate\Support\Facades\Redirect;

use Calendar;

class JobOrderScheduleController extends Controller
{
    public $viewBasePath = 'admin.transaction';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
     
    public function index()
    {
        //
        $jobs = JobOrder::where('isActive',1)->get();
        $order = JobOrder::all();
        $job_list= [];
        $number = 'JO0000';
        foreach ($order as $key => $job) {
            # code...
            $job_list[] = Calendar::event( 
                $number."".$job->id." - ".$job->inspects->customer->firstname." ".$job->inspects->customer->lastname,
                true,
                new \DateTime($job->jobStart),
                new \DateTime($job->end.'+1 day')
            );
                
        }
        
        $calendar = Calendar::addEvents($job_list);
        return view( $this->viewBasePath . '.joSchedule.index',compact('calendar'))
        ->with('jobs', $jobs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jobs = JobOrder::all();
        $customers = Customer::all();
        $technicians = Technician::all();
        $services = ServiceList::all();
        $inspects = Inspection::where(['isActive' => 1])->get();
        $parts = VehiclePart::all();

        return view( $this->viewBasePath . '.joSchedule.create')
        ->with('jobs',$jobs)
        ->with('customers',$customers)
        ->with('technicians',$technicians)
        ->with('services',$services)
        ->with('parts',$parts)
        ->with('inspects', $inspects);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request, [
            'start' => 'required|date|After:Yesterday',
            'start_time' => 'required|date_format:H:i',
            'remarks' => 'nullable',
            'technician.*' => 'required',
            'service.*' => 'required',
        ]);
        
            
        // Save to datarbase 
        $order = new JobOrder;
        $order->jobStart = $request->input('start');
        $order->jobStart_time = $request->input('start_time');
        $order->remarks = $request->input('remarks');
        $order->inspection_id = $request->customer;
        $order->save();
        
        DB::beginTransaction();
        $technicians = $request->technician;
        foreach($technicians as $technician){
            JobTechnician::create([
                'job_id' => $order->id,
                'technician_id' => $technician,
            ]);
        }

        $services = $request->service;
        foreach($services as $service){
            JobService::create([
                'job_id' => $order->id,
                'service_id' => $service,
            ]);
        }
        
        $inspect = DB::table('inspections') 
        ->where('id', $request->customer)
        ->update(['isActive' => 0]);


           DB::commit();

        session()->flash('notification', [
            'title' => 'Success!',
            'message' => 'You have created your service',
            'type' => 'success'
        ]);

        return Redirect('schedule');


        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $technicians = Jobtechnician::where('id', '=' ,$id);
        $jobs = JobOrder::where('id', '=', $id)->first();
        return view( $this->viewBasePath . '.joSchedule.showTable')
        ->with('jobs', $jobs)
        ->with('technicians', $technicians);

    }

    public function step(Request $request)
    {
        $this->validate($request, [
            'step' => 'nullable'

        ]);

        $step = new ServicePerformed;
        $step->job_id = $request->id;
        $step->step_id = $request->step_id;
        $step->current_step = $request->step;
        $step->save();


    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'step' => 'required',
        ]);

       
        DB::beginTransaction();
        $service = JobService::findOrFail($id);
        $service->update([
            'job_id' => $service->job_id,
            'service_id' => $service->id,
            'sequence' => $request->sequence,
        ]);

        DB::commit();

        session()->flash('notification', [
            'title' => 'Success!',
            'message' => 'You have created your service',
            'type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function findCustomer(Request $request)

    {

        $data = DB::table('inspections as i')
        ->join('customers as c','c.id','i.customer_id')
        ->join('vehicle_owners as v','v.id','i.owner_id')
        ->join('vehicle_models as vm', 'vm.id', 'v.vehicle_id')
        ->join('inspection_technicians as it', 'it.inspection_id', 'i.id')
        ->join('technicians as t', 't.id', 'it.technician_id')
        ->join('inspection_services as is', 'is.inspection_id', 'i.id')
        ->join('service_lists as s', 's.id', 'is.service_id')
        ->select('i.*', 'c.*', 'v.*', 'is.*','s.*' ,'vm.*','it.*','t.*')
        ->where('i.customer_id', $request->customer_id)->get();

        return response()->json($data);
     
    }

   public function findStep(Request $request)
   {

        $data = Step::select('*')
        ->where('service_id',$request->id)->get();

        return response()->json($data);

   } 



   public function updateSequence(Request $request)

   {

        DB::beginTransaction();
        $service = DB::table('job_services')
        ->where('job_id', $request->job_id)
        ->where('service_id' , $request->service_id )
        ->update(['sequence' => $request->sequence]);

        DB::commit();
        
        return response()->json(['success'=>'Data is successfully added']);
      
   }
   public function startRequest(Request $request)

   {

        DB::beginTransaction();
        $order = DB::table('job_orders')
        ->where('id', $request->id)
        ->update(['start' => $request->start, 'start_time' => $request->input('start_time'), 'isStartEnabled'=>1]);



        DB::commit();
        
        return response()->json(['success'=>'Data is successfully added']);
      
   }


   public function stopRequest(Request $request)

   {

        $StartTime= $request->start;
        $EndTime = $request->end;
        $sst = strtotime($StartTime);
        $eet=  strtotime($EndTime);
        $diff= $eet-$sst;
        $timeElapsed= gmdate("h:i",$diff);

        DB::beginTransaction();
        $order = DB::table('job_orders')
        ->where('id', $request->id)
        ->update(['end' => $request->end, 'end_time' => $request->input('end_time'), 'isStatus' => 1 , 'hours_worked' =>$timeElapsed , 'isStopEnabled'=>1 ]);

        DB::commit();
        
        return response()->json(['success'=>'Data is successfully added']);
      
   }


   public function serviceParts(Request $request)
   {


        $data = DB::table('service_parts as sp')
        ->join('vehicle_parts as vp', 'vp.id','sp.part_id')
        ->select('vp.*', 'sp.*')
        ->where('service_id', $request->service_id)->get();
        return response()->json($data);


   }


   public function updateProgress(Request $request)

   {

        DB::beginTransaction();
        $order = JobOrder::findOrFail($request->job_id);
        $order->update([
            'progressCount' => $request->progressCount,
        ]);

        DB::commit();
        
        return response()->json(['success'=>'Data is successfully added']);
      
   }

   public function getProgress(Request $request)
   {

        $data = JobOrder::select('*')
        ->where('id',$request->job_id)->get();

        
        return response()->json($data);

   }

   public function updateStart(Request $request)

   {

        DB::beginTransaction();
        $job= JobService::findOrFail($request->job_id);
        $job->update([
            'isStartEnabled' => 1,
        ]);

        DB::commit();
        
        return response()->json(['success'=>'Data is successfully added']);
      
   }

   public function updateStatus (Request $request)
   {

         $service = DB::table('job_services')
        ->where('job_id', $request->job_id)
        ->where('service_id' , $request->service_id )
        ->update(['sequence' => $request->sequence]);


        DB::beginTransaction();
        $inspect = DB::table('inspections') 
        ->where('id', $request->inspect_id)
        ->update(['isActive' => 0]);

        DB::commit();

        return response()->json(['success'=>'Data is successfully added']);
   }


}
