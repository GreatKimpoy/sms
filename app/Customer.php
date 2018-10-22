<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table = 'customers';
	public $primaryKey = 'id';
    public $timestamps = true;
    public $fillable = [
        'lastname',
        'firstname',
        'middlename',
        'barangay',
        'contact',
        'city',
        'street',
        'email',
    ];


    public function customerUpdateRules() 
    {
        return [
            'lastname' => 'required|min:2|max:60|string',
            'middlename' => 'min:2|max:60|string',
            'firstname' => 'required|min:2|max:60|string',
            'street' => 'required|min:2|max:60',
            'barangay' => 'required|min:2|max:60',
            'city' => 'required|min:2|max:60',
            'contact' => 'required|min:2|max:60',
            'email' => 'required|email',
        ];
    }


    public function checkIfCustomerExists()
    {
        return [
            'customer' => "required|exists:$this->table,id"
        ];
    }

    protected $appends = [
        'full_name', 'full_address'
    ];

    public function getFullNameAttribute()
    {
        $lastname = $this->lastname;
        $firstname = $this->firstname;
        $middlename = $this->middlename;
        return trim("$lastname, $firstname $middlename");
    }

    public function getFullAddressAttribute()
    {
        $street = $this->street;
        $barangay = $this->barangay;
        $city = $this->city;
        return trim("$street $barangay $city");
    }


    public function getVehiclesIdAttribute()
    {
        $vehicles = $this->vehicles->pluck('id');
        if( count($vehicles->toArray() ) > 0 ) {
            return $vehicles->toArray();
        }
    }

    public function inspect(){
        return $this->hasMany('App\Customer', 'customer_id');
    }

}
