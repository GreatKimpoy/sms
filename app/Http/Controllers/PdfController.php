<?php

namespace App\Http\Controllers;

use PDF;
use Barryvdh\Snappy\Facades\SnappyPdf as PDFSnappy;

use App\Inspection;
use App\InspectionItem;
use App\InspectionHeader;
use App\JobOrder;
use Illuminate\Http\Request;
use Validator;
use Redirect;
use Session;
use DB;
use Illuminate\Validation\Rule;

class PdfController extends Controller
{
     public function inspect($id){
        $date = date('Y-m-d H:i:s');
        $inspect = Inspection::findOrFail($id);
        //$pdf = PDFSnappy::loadView('pdf.inspection',compact('inspect','date'));
        //return $pdf->inline('github.pdf');
        //PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        //$pdf = PDF::loadview('pdf.inspection',compact('inspect','date'))->setPaper([0,0,612,792]);
        //return $pdf->download('inspection.pdf');
        return View('pdf/inspection',compact('inspect','date'));
    }

    public function jobs($id){
        $date = date('Y-m-d H:i:s');
        $job = JobOrder::findOrFail($id);

        return View('pdf/joborder',compact('job','date'));
    }

    public function job(Request $request){
        $date = date('Y-m-d H:i:s');
        $startDate = $request->start;
        $endDate = $request->end;
        $job = DB::select(DB::raw('
             SELECT jo.*, CONCAT_WS(" ",c.firstname,c.middlename,c.lastname) AS customer, v.plate_number as plate, vd.make as make,vd.model as model,vd.transmission_type AS transmission, CONCAT_WS(" ",t.firstName,t.middleName,t.lastName) as technician, s.name as serviceName  FROM job_orders AS jo
            JOIN inspections AS i ON i.id = jo.inspection_id 
            JOIN job_technicians AS jt ON jt.job_id = jo.id
            JOIN technicians AS t on t.id = jt.technician_id
            JOIN job_services as js on js.job_id = jo.id
            JOIN service_lists as s on s.id = js.service_id
            JOIN customers AS c ON c.id = i.customer_id
            JOIN vehicle_owners AS v ON v.id = i.owner_id
            JOIN vehicle_models AS vd ON vd.id = v.vehicle_id
            WHERE jo.isStatus = 1
            GROUP BY jo.id
            '));
        //$pdf = PDFSnappy::loadView('pdf.inspection',compact('inspect','date'));
        //return $pdf->inline('github.pdf');
        //PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        //$pdf = PDF::loadview('pdf.inspection',compact('inspect','date'))->setPaper([0,0,612,792]);
        //return $pdf->download('inspection.pdf');
        return View('pdf/jobReport',compact('job','date'));
    }

    public function prod(){
        $date = date('Y-m-d H:i:s');
        $job = JobOrder::all(); 
        $tech = DB::select(DB::raw('
            SELECT jo.*, CONCAT_WS(" ",t.firstName,t.middleName,t.lastName) AS technician, t.id as techid, COUNT(*) as serviceNumber FROM job_orders AS jo
            JOIN job_technicians AS jt ON jt.job_id = jo.id
            JOIN technicians AS t on t.id = jt.technician_id
            JOIN job_services as js on js.job_id = jo.id
            JOIN service_lists as s on s.id = js.service_id
            WHERE jo.isStatus = 1
            GROUP BY t.id 
            '));
        return View('pdf/prodReport',compact('tech','date','job'));
    }

    public function appoint(Request $request){
        $date = date('Y-m-d H:i:s');
        $job = JobOrder::all(); 
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
            GROUP BY jo.id
            '));
        return View('pdf/appointReport',compact('appointment','date','job'));
    }
}
