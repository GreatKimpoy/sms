<?php

namespace App\Http\Controllers\Maintenance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ServiceList;
use App\ServiceCategory;
use App\VehiclePart;
use App\Step;
use Response;
use Validator;


class ServiceListController extends Controller
{
    public $viewBasePath = 'admin.maintenance';
    public $baseUrl = 'service';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if( $request->ajax() ) {
            $services = ServiceList::with('category')->get();
            return datatables($services)->toJson();
        }
        return view( $this->viewBasePath . '.service.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = ServiceCategory::all();
        return view( $this->viewBasePath . '.service.create')
                ->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ServiceList $service)
    {
        //
        $name = filter_var($request->get('name'), FILTER_SANITIZE_STRING);
        $description = filter_var($request->get('description'), FILTER_SANITIZE_STRING);
        $category = filter_var($request->get('category'), FILTER_VALIDATE_INT);
        $standard_time= filter_var($request->get('standard_time'), FILTER_SANITIZE_STRING);

        $validator = Validator::make( $request->all(), $service->rules());
        if($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $service = new ServiceList;
        $service->name = $name;
        $service->description = $description;
        $service->category_id = $category;
        $service->standard_time = $standard_time;
        $service->save();

		session()->flash('notification', [
            'title' => 'Success!',
            'message' => 'You have created your service',
            'type' => 'success'
        ]);

        return redirect($this->baseUrl);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = filter_var( $id, FILTER_VALIDATE_INT);
        $service = ServiceList::where('id', '=', $id)->first();
        $categories = ServiceCategory::all();
        $parts = VehiclePart::all();
        $steps = Step::all();
        $time = Step::where('service_id', '=', $id)->sum('time_consumed');

        return view( $this->viewBasePath . '.service.show')
                ->with('service', $service)
                ->with('categories', $categories)
                ->with('parts', $parts)
                ->with('steps',$steps)
                ->with('time', $time);
    
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
        $service = ServiceList::where('id', '=', $id)->first();
        $categories = ServiceCategory::all();

        return view( $this->viewBasePath . '.service.edit')
                ->with('service', $service)
                ->with('categories', $categories);
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
        $name = filter_var($request->get('name'), FILTER_SANITIZE_STRING);
        $description = filter_var($request->get('description'), FILTER_SANITIZE_STRING);
        $category = filter_var($request->get('category'), FILTER_VALIDATE_INT);     
        $standard_time= filter_var($request->get('standard_time'), FILTER_SANITIZE_STRING);

        $service = new ServiceList;
        $service->name = $name;

        $validator = Validator::make([
            'name' => $name,
            'description' => $description,
            'service' => $id,
            'standard_time' => $standard_time,
            'category' => $category
        ], $service->updateRules());

        if($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $service = ServiceList::find($id);
        $service->name = $name;
        $service->description = $description;
        $service->category_id = $category;
        $service->standard_time = $standard_time;
        $service->save();

		session()->flash('notification', [
            'title' => 'Success!',
            'message' => 'You have successfully updated a service',
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

    public function showServicePart($id)
    {
        $data = 'sample data ko';
        return response()->json(['data' => $data]);
    }

    public function addSteps(Request $request)
    {
        $this->validate($request, [
            'sequence' => 'required',
            'time' => 'required',
            'description' => 'nullable',
            'service' => 'required',        
        ]);
        
        $step = new Step;
        $step->sequence = $request->sequence;
        $step->time_consumed = $request->time;
        $step->description = $request->description;
        $step->service_id = $request->service;
        $step->save();


        session()->flash('notification', [
            'title' => 'Success!',
            'message' => 'You have created your a vehicle category',
            'type' => 'success'
        ]);

        
        return redirect('service');
            
    }
}
