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
    public function index()
    {
        //
        $jobs = JobOrder::all();
        $job_list= [];
        $number = 'JO0000';
        foreach ($jobs as $key => $job) {
            # code...
            $job_list[] = Calendar::event( 
                $number."".$job->id." - ".$job->inspects->customer->firstname." ".$job->inspects->customer->lastname,
                true,
                new \DateTime($job->start),
                new \DateTime($job->end.'+1 day')
            );
                
        }
        
        $calendars = Calendar::addEvents($job_list);
        return view( $this->viewBasePath . '.joSchedule.index', compact('calendars'))
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
        $inspects = Inspection::all();
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
            'start_date' => 'required|date',
            'start_time' => 'required',
            'end_date' => 'required|date',
            'end_time' => 'required',
            'remarks' => 'nullable',
            'technician.*' => 'required',
            'service.*' => 'required',
        ]);
        
            
        // Save to database 
        $order = new JobOrder;
        $order->start = $request->input('start_date')." ".$request->input('start_time');
        $order->end = $request->input('end_date')." ".$request->input('end_time');
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

        DB::commit();

        session()->flash('notification', [
            'title' => 'Success!',
            'message' => 'You have created your service',
            'type' => 'success'
        ]);

        return view($this->viewBasePath.'.joSchedule.index', (compact('calendars')));


        
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
        //
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

        $data = Customer::select('firstname', 'middlename' ,'lastname','street','barangay','city','contact','email')
        ->where('id',$request->id)->first();

        return response()->json($data);

    }


}
