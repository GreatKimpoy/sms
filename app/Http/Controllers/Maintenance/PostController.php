<?php

namespace App\Http\Controllers\Maintenance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Validator;
use App\Customer;
class PostController extends Controller
{
    
    public function edit($id)
    {

        $id = filter_var( $id, FILTER_VALIDATE_INT);
        $customer = Customer::all()->where('id', '=', $id)->first();

       
        return view('admin.maintenance.customer.update')
                ->with('customer', $customer);
       
    }

    public function update(Request $request, $id)
    {
        $id = filter_var( $id, FILTER_VALIDATE_INT);
        $lastname = filter_var($request->get('lastname'), FILTER_SANITIZE_STRING);
        $firstname = filter_var($request->get('firstname'), FILTER_SANITIZE_STRING);
        $middlename = filter_var($request->get('middlename'), FILTER_SANITIZE_STRING);
        $street = filter_var($request->get('street'), FILTER_SANITIZE_STRING);
        $barangay = filter_var($request->get('barangay'), FILTER_SANITIZE_STRING);
        $city = filter_var($request->get('city'), FILTER_SANITIZE_STRING);
        $birthdate = filter_var($request->get('birthdate'), FILTER_SANITIZE_STRING);
        $contact = filter_var($request->get('contact'), FILTER_SANITIZE_STRING);
        $email = filter_var($request->get('email'), FILTER_SANITIZE_STRING);
        $customer = Customer::find($id);

        $validator = Validator::make( $request->all() + [ 'customer' => $id ], $customer->customerUpdateRules());
        if($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $customer->lastname = $lastname;
        $customer->firstname = $firstname;
        $customer->middlename = $middlename;
        $customer->barangay = $barangay;
        $customer->city = $city;
        $customer->street = $street;
        $customer->contact = $contact;
        $customer->email = $email;
      

        DB::beginTransaction();
        $customer->save();
        DB::commit();

        session()->flash('notification', [
            'title' => 'Success!',
            'message' => 'You have update a customers information',
            'type' => 'success'
        ]);

        return redirect('customer');
    }
}
