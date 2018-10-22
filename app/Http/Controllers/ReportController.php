<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\JobOrder;

class ReportController extends Controller
{
     public $viewBasePath = 'admin';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jobs = JobOrder::findOrFail(1);
        $dateStart = date('m/d/Y', strtotime($jobs->created_at));
        $dateEnd = date('m/d/Y');
        $dateString = $dateStart.'-'.$dateEnd;

        $job = DB::select(DB::raw('
            SELECT CONCAT_WS(" ",c.firstname,c.middlename,c.lastname) AS customer, v.plate_number as plate, vd.make as make, vd.model as model, vd.transmission_type as transmission FROM job_orders as jo
            JOIN inspections AS i ON i.id = jo.inspection_id 
            JOIN customers AS c ON c.id = i.customer_id
            JOIN vehicle_owners AS v ON v.id = i.owner_id
            JOIN vehicle_models AS vd ON vd.id = v.vehicle_id
            WHERE jo.isStatus = 1
            GROUP BY jo.id
            '));

        return view ($this->viewBasePath . '.reports.index', compact('dateString', 'job','dateEnd'));
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

    public function filter(Request $request)
    {
        $jobs = JobOrder::findOrFail(1);
        $dateStart = date('m/d/Y', strtotime($jobs->created_at));
        $date = $request->date;
        $dates = explode('-',$request->date); // two dates MM/DD/YYYY-MM/DD/YYYY
        $startDate = explode('/',$dates[0]); // MM[0] DD[1] YYYY[2]
        $minus = $startDate[1]-1;
        $dateEnd = "$startDate[2]-$startDate[0]-$minus 23:59:59";
        $finalStartDate = "$startDate[2]-$startDate[0]-$startDate[1] 00:00:00";
        $endDate = explode('/',$dates[1]); // MM[0] DD[1] YYYY[2] 
        $finalEndDate = "$endDate[2]-$endDate[0]-$endDate[1] 23:59:59";

        if($request->reportId=="1"){
            $job = DB::select(DB::raw('
            SELECT jo.*, CONCAT_WS(" ",c.firstname,c.middlename,c.lastname) AS customer,CONCAT_WS(" ", v.plate_number, vd.make,vd.model,vd.transmission_type) AS car  FROM job_orders AS jo
            JOIN inspections AS i ON i.id = jo.inspection_id 
            JOIN customers AS c ON c.id = i.customer_id
            JOIN vehicle_owners AS v ON v.id = i.owner_id
            JOIN vehicle_models AS vd ON vd.id = v.vehicle_id
            WHERE jo.isStatus = 1 AND jo.start BETWEEN "'.$finalStartDate.'" AND "'.$finalEndDate.'"
            GROUP BY jo.id
            ORDER BY jo.id
            '));
            return response()->json(['data'=>$job]);
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
