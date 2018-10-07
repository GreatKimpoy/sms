<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Technician extends Model
{
    //
    protected $table = 'technicians';
    //Primary Key
	public $primaryKey = 'id';
    // Timestamps
    public $timestamps = false;
    
    public $fillable = [
        'lastname',
        'firstname',
        'middlename',
        'barangay',
        'city',
        'street',
        'birthdate',
        'contact',
        'email',
        'image',
    ];

    public function mechanicRules() 
    {
        return [
            'image' => 'nullable',
            'lastname' => 'required|min:2|max:60|string',
            'middlename' => 'nullable|min:2|max:60|string',
            'firstname' => 'required|min:2|max:60|string',
            'street' => 'required|min:2|max:60',
            'barangay' => 'required|min:2|max:60',
            'city' => 'required|min:2|max:60',
            'birthdate' => 'required|date',
            'contact' => 'required|min:2|max:60',
            'email' => 'required|email',

        ];
    }

    public function mechanicUpdateRules() 
    {
        return [
             'image' => 'nullable',
            'lastname' => 'required|min:2|max:60|string',
            'middlename' => 'min:2|max:60|string',
            'firstname' => 'required|min:2|max:60|string',
            'street' => 'required|min:2|max:60',
            'barangay' => 'required|min:2|max:60',
            'city' => 'required|min:2|max:60',
            'birthdate' => 'required|date',
            'contact' => 'required|min:2|max:60',
            'email' => 'required|email',


        ];
    }

    public function categories()
    {
    return $this->belongsToMany( __NAMESPACE__ . '\\ServiceCategory', 'technician_skills', 'technician_id', 'category_id');
    }

    protected $appends = [
        'full_name', 'full_address', 'specializations', 'specializations_id'
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

    public function getSpecializationsAttribute()
    {
        $categories = $this->categories->pluck('name');
        if( count($categories->toArray() ) > 0 ) {
            return implode(', ', $categories->toArray());
        } else {
            return 'None';
        }
    }

    public function getSpecializationsIdAttribute()
    {
        $categories = $this->categories->pluck('id');
        if( count($categories->toArray() ) > 0 ) {
            return $categories->toArray();
        }
    }

     /**
    * Accessor for Age.
     */
    public function getAgeAttribute()
    {
    return Carbon::parse($this->attributes['birthdate'])->age;
    }

    public function jobs()
    {
        return $this->belongsToMany( __NAMESPACE__ . '\\JobOrder', 'job_technicians', 'technician_id', 'job_id');
    }

    public function technician(){
        return $this->hasMany('App\JobTechnician', 'technician_id', 'id');
    }
}
