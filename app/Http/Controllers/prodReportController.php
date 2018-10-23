<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\JobOrder;

use PDF;
use Barryvdh\Snappy\Facades\SnappyPdf as PDFSnappy;

class prodReportController extends Controller
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

        $tech = DB::select(DB::raw('
            SELECT jo.*, CONCAT_WS(" ",t.firstName,t.middleName,t.lastName) AS technician, t.id as techid, COUNT(*) as serviceNumber FROM job_orders AS jo
            JOIN job_technicians AS jt ON jt.job_id = jo.id
            JOIN technicians AS t on t.id = jt.technician_id
            JOIN job_services as js on js.job_id = jo.id
            JOIN service_lists as s on s.id = js.service_id
            WHERE jo.isStatus = 1
            GROUP BY t.id 
            '));


        return view ($this->viewBasePath . '.prodReport.index',compact('dateString', 'tech','dateEnd'));
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
        $startDate = $request->start;
        $endDate = $request->end;

            $tech = DB::select(DB::raw('
            SELECT jo.*, CONCAT_WS(" ",t.firstName,t.middleName,t.lastName) AS technician, t.id as techid, COUNT(*) as serviceNumber FROM job_orders AS jo
            JOIN job_technicians AS jt ON jt.job_id = jo.id
            JOIN technicians AS t on t.id = jt.technician_id
            JOIN job_services as js on js.job_id = jo.id
            JOIN service_lists as s on s.id = js.service_id
            WHERE jo.isStatus = 1 AND jo.end BETWEEN "'.$startDate.'" AND "'.$endDate.'"
            GROUP BY t.id
            '));
            return response()->json(['data'=>$tech]);
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
