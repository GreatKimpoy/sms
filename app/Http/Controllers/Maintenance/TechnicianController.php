<?php

namespace App\Http\Controllers\Maintenance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Technician;
use App\TechinicianSkill;
use Validator;
use App\ServiceCategory;
use DB;

class TechnicianController extends Controller
{

    public $viewBasePath = 'admin.maintenance';
    public $baseUrl = 'technician';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if( $request->ajax() ) {
            $technicians = Technician::all();
            return datatables($technicians)->toJson();
        }
        return view( $this->viewBasePath . '.technician.index');
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
        return view( $this->viewBasePath . '.technician.create')
        ->with('categories', $categories);
       
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
        $lastname = filter_var($request->get('lastname'), FILTER_SANITIZE_STRING);
        $firstname = filter_var($request->get('firstname'), FILTER_SANITIZE_STRING);
        $middlename = filter_var($request->get('middlename'), FILTER_SANITIZE_STRING);
        $street = filter_var($request->get('street'), FILTER_SANITIZE_STRING);
        $barangay = filter_var($request->get('barangay'), FILTER_SANITIZE_STRING);
        $city = filter_var($request->get('city'), FILTER_SANITIZE_STRING);
        $birthdate = filter_var($request->get('birthdate'), FILTER_SANITIZE_STRING);
        $contact = filter_var($request->get('contact'), FILTER_SANITIZE_STRING);
        $email = filter_var($request->get('email'), FILTER_SANITIZE_STRING);
        $specializations = $request->get('specializations');
        $image = $request->get('image');
        $technician = new Technician;

        $validator = Validator::make( $request->all(), $technician->mechanicRules());
        if($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $technician->lastname = $lastname;
        $technician->firstname = $firstname;
        $technician->middlename = $middlename;
        $technician->barangay = $barangay;
        $technician->city = $city;
        $technician->street = $street;
        $technician->birthdate = $birthdate;
        $technician->contact = $contact;
        $technician->email = $email;

        if ($request->hasFile('image')) {
            // Get filename with extension
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            // Get the filename only
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get the file's extension only
            $fileExt = $request->file('image')->getClientOriginalExtension();
            // create full filename
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            // upload the file
            $path = $request->file('image')->storeAs('public/images/profile', $fileNameToStore);
          } else {
            $fileNameToStore = 'default_profile_img.png';
          }
          $technician->image = $fileNameToStore;

        DB::beginTransaction();
        $technician->save();
        $technician->categories()->attach($specializations);
        DB::commit();

		session()->flash('notification', [
            'title' => 'Success!',
            'message' => 'You have created a user information',
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
     
        $technician = Technician::where('id', '=', $id)->first();
        

        return view( $this->viewBasePath . '.technician.show')
        ->with('technician', $technician);
              
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
        $technician = Technician::all()->where('id', '=', $id)->first();

        $categories = ServiceCategory::all();
        return view( $this->viewBasePath . '.technician.edit')
                ->with('technician', $technician)
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

    public function view($id){

        return view( $this->viewBasePath . '.technician.techprofile');
    }
    
    
}
