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
    public $timestamps = true;
    
    public $fillable = [
        'lastName',
        'firstName',
        'middleName',
        'Barangay',
        'City',
        'Street',
        'Birthdate',
        'Contact',
        'Email',
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
        $lastName = $this->lastName;
        $firstName = $this->firstName;
        $middleName = $this->middleName;
        return trim("$lastName, $firstName $middleName");
    }

    public function getFullAddressAttribute()
    {
        $Street = $this->Street;
        $Barangay = $this->Barangay;
        $City = $this->City;
        return trim("$Street $Barangay $City");
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
    return Carbon::parse($this->attributes['Birthdate'])->age;
    }

    public function jobs()
    {
        return $this->belongsToMany( __NAMESPACE__ . '\\JobOrder', 'job_technicians', 'technician_id', 'job_id');
    }

    public function technician(){
        return $this->hasMany('App\JobTechnician', 'technician_id', 'id');
    }
}
