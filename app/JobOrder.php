<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobOrder extends Model
{
    //
    protected $table = 'job_orders';
	public $primaryKey = 'id';
    public $timestamps = false;

    public $fillable = [
        'customer_id',
        'vehicle_id',
        'inspection_id',
        'start',
        'start_time',
        'end',
        'end_time',
        'remarks',
        'progressCount',
    ];

    public function rules() 
    {
        return [
            'customer' => 'required',
            'start_date' => 'required|date|date_format:M-d-y|after:yesterday',
            'start_time'=>'required',
            'firstname' => 'required|min:2|max:60|string',
            'street' => 'required|min:2|max:60',
            'barangay' => 'required|min:2|max:60',
            'city' => 'required|min:2|max:60',
            'birthdate' => 'required|date',

        ];
    }

    public function technicians()
    {
        return $this->belongsToMany( __NAMESPACE__ . '\\Technician', 'job_technicians', 'job_id', 'technician_id');
    }

    public function technician()
    {
        return $this->hasMany('App\Jobtechnician', 'job_id', 'id');
    }

    public function services()
    {
        return $this->belongsToMany( __NAMESPACE__ . '\\ServiceList', 'job_services', 'job_id', 'service_id');
    }

    public function inspects()
    {
        return $this->belongsTo('App\Inspection', 'inspection_id', 'id');
    }

    public function customers()
    {
        return $this->belongsTo('App\Customer', 'customer_id', 'id');
    }

    public function materials()
    {
        return $this->hasMany('App\Part', 'materials', 'vehicle_part_id', 'job_id');
    }

    public function vehicles()
    {
        return $this->hasMany('App\VehicleOwner', 'vehicle_id', 'id');
    }
}
