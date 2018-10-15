<?php

namespace App\Http\Controllers\Maintenance;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Validator;
use App\InspectionItem;
use App\ServiceList;
use App\VehicleModel;
use App\Customer;
use App\VehicleOwner;
use App\Inspection;
use App\Technician;
use App\InspectionHeader;
use App\InspectionService;
use App\InspectionTechnician;

class CustomerController extends Controller
{

    public $viewBasePath = 'admin.maintenance.customer';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        //
        
        if( $request->ajax() ) {
            $customers = Customer::all();
            return datatables($customers)->toJson();
        }
        return view( $this->viewBasePath . '.index');
    }

    /**z
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

      
        $id = filter_var( $id, FILTER_VALIDATE_INT);


        $items = InspectionItem::where('active', 1)->get();
        $services = ServiceList::all();
        $autos = DB::table('vehicle_models as vd')
            ->select('vd.*')
            ->get();
        $vehicles = DB::table('vehicle_owners as v')
            ->select('v.*')
            ->get();
        $technicians = Technician::all();
        return View($this ->viewBasePath.'.create',compact('items','autos','vehicles','technicians','services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        
        $rules = [
            'plate' => 'required',
            'modelId' => 'required',
            'technician.*' => 'required',
            'remarks' => 'max:140',
            'form.*' => 'required',
            'item.*' => 'required',
            'service.*' => 'required',
        ];
        $messages = [
            'unique' => ':attribute already exists.',
            'required' => 'The :attribute field is required.',
            'max' => 'The :attribute field must be no longer than :max characters.',
            'regex' => 'The :attribute must not contain special characters.'                
        ];
        $niceNames = [
            'plate' => 'Plate No.',
            'modelId' => 'Vehicle Model',
            'technician.*' => 'Technician Assigned',
            'remarks' => 'Remarks',
            'form.*' => 'Form',
            'item.*' => 'Item',
            'service.*' => 'Services'
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        $validator->setAttributeNames($niceNames); 
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        else{
            try{
         
                DB::beginTransaction();
                $id = filter_var( $id, FILTER_VALIDATE_INT);
                $customer = Customer::find($id);
                $model = $request->modelId;
                $vehicle = VehicleOwner::updateOrCreate(
                    [
                        'plate_number' => str_replace('_','',trim($request->plate)),
                        'vehicle_id' => $model,
                    ]
                );
                
                $inspection = Inspection::create([
                        'customer_id' => $customer->id,
                        'owner_id' => $vehicle->id,
                        'additional_remarks' => trim($request->remarks),   
                ]);

                $forms = $request->form;
                $items = $request->item_id;
                foreach($items as $key=>$item){
                    InspectionHeader::create([
                        'inspection_id' => $inspection->id,
                        'item_id' => $item,
                        'remarks' => $forms[$key],
                    ]);
                }
                $services = $request->service;
                foreach($services as $service){
                    InspectionService::create([
                        'inspection_id' => $inspection->id,
                        'service_id' => $service,
                    ]);
                }
                $technicians = $request->technician;
                foreach($technicians as $technician){
                    InspectionTechnician::create([
                        'inspection_id' => $inspection->id,
                        'technician_id' => $technician,
                    ]);
                }
                DB::commit();
            }catch(\Illuminate\Database\QueryException $e){
                DB::rollBack();
                $errMess = $e->getMessage();
                return back()->withErrors($errMess);
            }
            $request->session()->flash('success', 'Successfully added.');  
         
           return redirect('checkup');          
        
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = filter_var( $id, FILTER_VALIDATE_INT);       
        $items = InspectionItem::where('active', 1)->get();
        $services = ServiceList::all();
        $autos = DB::table('vehicle_models as vd')
            ->select('vd.*')
            ->get();
        $vehicles = DB::table('vehicle_owners as v')
            ->select('v.*')
            ->get();
        $customer = Customer::find($id);
        $technicians = Technician::all();
        return View($this ->viewBasePath.'.create',compact('items','autos','vehicles','technicians','services','auto','customer'));
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
        $rules = [
            'plate' => 'required',
            'modelId' => 'required',
            'technician.*' => 'required',
            'remarks' => 'max:140',
            'form.*' => 'required',
            'item.*' => 'required',
            'service.*' => 'required',
        ];
        $messages = [
            'unique' => ':attribute already exists.',
            'required' => 'The :attribute field is required.',
            'max' => 'The :attribute field must be no longer than :max characters.',
            'regex' => 'The :attribute must not contain special characters.'                
        ];
        $niceNames = [
            'plate' => 'Plate No.',
            'modelId' => 'Vehicle Model',
            'technician.*' => 'Technician Assigned',
            'remarks' => 'Remarks',
            'form.*' => 'Form',
            'item.*' => 'Item',
            'service.*' => 'Services'
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        $validator->setAttributeNames($niceNames); 
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        else{
            try{
         
                DB::beginTransaction();
                $id = filter_var( $id, FILTER_VALIDATE_INT);
                $customer = Customer::find($id);
                $model = $request->modelId;
                $vehicle = VehicleOwner::updateOrCreate(
                    [
                        'plate_number' => str_replace('_','',trim($request->plate)),
                        'vehicle_id' => $model,
                    ]
                );
                
                $inspection = Inspection::create([
                        'customer_id' => $customer->id,
                        'owner_id' => $vehicle->id,
                        'additional_remarks' => trim($request->remarks),   
                ]);

                $forms = $request->form;
                $items = $request->item_id;
                foreach($items as $key=>$item){
                    InspectionHeader::create([
                        'inspection_id' => $inspection->id,
                        'item_id' => $item,
                        'remarks' => $forms[$key],
                    ]);
                }
                $services = $request->service;
                foreach($services as $service){
                    InspectionService::create([
                        'inspection_id' => $inspection->id,
                        'service_id' => $service,
                    ]);
                }
                $technicians = $request->technician;
                foreach($technicians as $technician){
                    InspectionTechnician::create([
                        'inspection_id' => $inspection->id,
                        'technician_id' => $technician,
                    ]);
                }
                DB::commit();
            }catch(\Illuminate\Database\QueryException $e){
                DB::rollBack();
                $errMess = $e->getMessage();
                return back()->withErrors($errMess);
            }
            $request->session()->flash('success', 'Successfully added.');  
         
           return redirect('checkup');          
        
    }
        
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
}
