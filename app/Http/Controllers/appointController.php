<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\JobOrder;

use PDF;
use Barryvdh\Snappy\Facades\SnappyPdf as PDFSnappy;

class appointController extends Controller
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

        $appointment = DB::select(DB::raw('
            SELECT jo.*, CONCAT_WS(" ",c.firstname,c.middlename,c.lastname) AS customer , jo.jobStart as AppointmentDate FROM job_orders AS jo
            JOIN inspections AS i ON i.id = jo.inspection_id 
            JOIN job_technicians AS jt ON jt.job_id = jo.id
            JOIN technicians AS t on t.id = jt.technician_id
            JOIN job_services as js on js.job_id = jo.id
            JOIN service_lists as s on s.id = js.service_id
            JOIN customers AS c ON c.id = i.customer_id
            JOIN vehicle_owners AS v ON v.id = i.owner_id
            JOIN vehicle_models AS vd ON vd.id = v.vehicle_id
            GROUP BY jo.id
            '));

        return view ($this->viewBasePath . '.appointreport.index',  compact('dateString','appointment','dateEnd'));
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
        $job = JobOrder::all(); 
        $jobs = JobOrder::findOrFail(1);
        $dateStart = date('m/d/Y', strtotime($jobs->created_at));
        $startDate = $request->start;
        $endDate = $request->end;
        $start = date_create($request->start);
        $start = date_format($start,"F d,Y");
        $end = date_create($request->end);
        $end = date_format($end,"F d,Y");
        $date = "From $start To $end";
            $appointment = DB::select(DB::raw('
            SELECT jo.*, CONCAT_WS(" ",c.firstname,c.middlename,c.lastname) AS customer , jo.jobStart as AppointmentDate FROM job_orders AS jo
            JOIN inspections AS i ON i.id = jo.inspection_id 
            JOIN job_technicians AS jt ON jt.job_id = jo.id
            JOIN technicians AS t on t.id = jt.technician_id
            JOIN job_services as js on js.job_id = jo.id
            JOIN service_lists as s on s.id = js.service_id
            JOIN customers AS c ON c.id = i.customer_id
            JOIN vehicle_owners AS v ON v.id = i.owner_id
            JOIN vehicle_models AS vd ON vd.id = v.vehicle_id
            WHERE jo.jobStart BETWEEN "'.$startDate.'" AND "'.$endDate.'"
            GROUP BY jo.id
            '));
            return View('pdf/appointReport',compact('appointment','date','job'));

    }

    public function filter(Request $request)
    {
        $jobs = JobOrder::findOrFail(1);
        $dateStart = date('m/d/Y', strtotime($jobs->created_at));
        $startDate = $request->start;
        $endDate = $request->end;

            $appointment = DB::select(DB::raw('
            SELECT jo.*, CONCAT_WS(" ",c.firstname,c.middlename,c.lastname) AS customer , jo.jobStart as AppointmentDate FROM job_orders AS jo
            JOIN inspections AS i ON i.id = jo.inspection_id 
            JOIN job_technicians AS jt ON jt.job_id = jo.id
            JOIN technicians AS t on t.id = jt.technician_id
            JOIN job_services as js on js.job_id = jo.id
            JOIN service_lists as s on s.id = js.service_id
            JOIN customers AS c ON c.id = i.customer_id
            JOIN vehicle_owners AS v ON v.id = i.owner_id
            JOIN vehicle_models AS vd ON vd.id = v.vehicle_id
            WHERE jo.jobStart BETWEEN "'.$startDate.'" AND "'.$endDate.'"
            GROUP BY jo.id
            '));
            
            return response()->json(['data'=>$appointment]);
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
