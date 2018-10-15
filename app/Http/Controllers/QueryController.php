<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use App\Technician;
use App\JobTechnician;
use App\JobOrder;
use App\Servicelist;
use App\JobService;
Use DB;

class QueryController extends Controller
{

    public $viewBasePath = 'admin';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {




        $technicians = DB::select(DB::raw('
            SELECT tech.*, COUNT(*) AS total FROM technicians AS tech
            JOIN job_technicians AS jt ON jt.technician_id = tech.id
            JOIN job_orders AS jo ON jo.id = jt.job_id
            WHERE jo.isStatus=0
            GROUP BY tech.id
            ORDER BY total DESC
            LIMIT 5
            '));

        $services = DB::select(DB::raw('
            SELECT service.*, COUNT(*) AS total FROM service_lists AS service
            JOIN job_services AS js ON js.service_id = service.id
            JOIN job_orders AS jo ON jo.id = js.job_id
            WHERE jo.isStatus=0
            GROUP BY service.id
            ORDER BY total DESC
            LIMIT 5
            '));
        $vehicles = DB::select(DB::raw('
            SELECT vehicles.*, COUNT(*) AS total from vehicle_models as vehicles
            JOIN vehicle_owners AS vo ON vo.vehicle_id = vehicles.id
            JOIN inspections AS i ON i.owner_id = vo.id
            JOIN job_orders AS jo ON jo.inspection_id = i.id
            WHERE jo.isStatus=0
            GROUP BY vehicles.id
            ORDER BY total DESC
            LIMIT 5

            '));

        $customers= DB::select(DB::raw('
                SELECT cust.*, COUNT(*) AS total from customers as cust
                JOIN inspections AS i ON i.customer_id = cust.id
                JOIN job_orders AS jo ON jo.inspection_id = i.id
                WHERE jo.isStatus=0
                GROUP BY cust.id
                ORDER BY total DESC
                LIMIT 5
            '));

        return View ($this->viewBasePath . '.queries.index',compact('technicians', 'services', 'vehicles', 'customers'));

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
