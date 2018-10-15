<?php

namespace App\Http\Controllers\Maintenance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\VehicleModel;
use Validator;
use App\VehiclePart;

class VehicleModelsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public $viewBasePath = 'admin.maintenance';
    public $baseUrl = 'model';

    public function index(Request $request)
    {
        //
        
        if( $request->ajax() ) {
            $vehicles = VehicleModel::all();
            return datatables($vehicles)->toJson();
        }
        
       
        return view( $this->viewBasePath . '.vehicles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view( $this->viewBasePath . '.vehicles.create')
        ->with('transmission_types', VehicleModel::$transmission_types);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, VehicleModel $vehicle )
    {
        //
        $make = filter_var($request->get('make'), FILTER_SANITIZE_STRING);
        $model = filter_var($request->get('model'), FILTER_SANITIZE_STRING);
        $size = filter_var($request->get('size'), FILTER_SANITIZE_STRING);
        $transmission = filter_var($request->get('transmission'), FILTER_SANITIZE_STRING);

        $validator = Validator::make( $request->all(), $vehicle->rules());
        if($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $vehicle = new VehicleModel;
        $vehicle->make = $make;
        $vehicle->model = $model;
        $vehicle->size = $size;
        $vehicle->transmission_type = $transmission;
        $vehicle->save();

		session()->flash('notification', [
            'title' => 'Success!',
            'message' => 'You have created your a vehicle category',
            'type' => 'success'
        ]);

        return redirect('model');
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
        $id = filter_var( $id, FILTER_VALIDATE_INT);
        $category = VehicleModel::where('id', '=', $id)->first();
        $parts = VehiclePart::all();

                    
        return View($this ->viewBasePath.'.vehicles.show',compact('category','parts'));
            
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
        $id = filter_var( $id, FILTER_VALIDATE_INT);
        $category = VehicleModel::where('id', '=', $id)->first();

        return view( $this->viewBasePath . '.vehicles.edit')
                ->with('category', $category);
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
        $id = filter_var( $id, FILTER_VALIDATE_INT);
        $make = filter_var($request->get('make'), FILTER_SANITIZE_STRING);
        $model = filter_var($request->get('model'), FILTER_SANITIZE_STRING);
        $size = filter_var($request->get('size'), FILTER_SANITIZE_STRING);
        $transmission = filter_var($request->get('transmission'), FILTER_SANITIZE_STRING);
        $vehicle = VehicleModel::find($id);

        $validator = Validator::make([
            'make' => $make,
            'model' => $model,
            'size' => $size,
            'transmission' => $transmission
        ], $vehicle->updateRules());

        if($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $vehicle->make = $make;
        $vehicle->model = $model;
        $vehicle->size = $size;
        $vehicle->transmission_type = $transmission;

        session()->flash('notification', [
            'title' => 'Success!',
            'message' => 'You have update a mechanics information',
            'type' => 'success'
        ]);

        return redirect($this->baseUrl);
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

    public function addParts(Request $request){

        $this->validate($request, [
            'number' => 'required',
            'desctiption' => 'nullable',
            'model' => 'required',        
        ]);
        
        $part = new VehiclePart;
        $part->number = $request->number;
        $part->description = $request->description;
        $part->vehicle_id = $request->model;
        $part->save();


        session()->flash('notification', [
            'title' => 'Success!',
            'message' => 'You have created your a vehicle category',
            'type' => 'success'
        ]);

        return redirect('model');

        
            

    }
}
