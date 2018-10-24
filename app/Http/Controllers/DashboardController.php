<?php

namespace App\Http\Controllers;


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

use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $currentMonth=date('m');
    

        $customer=Customer::whereRaw('MONTH(created_at) = ?', [$currentMonth])->get();
        $job=JobOrder::whereRaw('MONTH(created_at) = ?', [$currentMonth])->get();
        $orders = JobOrder::whereDate('jobStart', '>', (Carbon::today())->toDateString())->get();
        $technicians = JobTechnician::where('job_id', 'id');
        $jobs = JobOrder::where('isStatus', 1)->get(); 
        
        return view('admin.dashboard.index',compact('customer','job' ,'jobs', 'technicians','orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
