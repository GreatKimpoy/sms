<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleOwner extends Model
{
    //
    protected $table = 'vehicle_owners';
    //Primary Key
	public $primaryKey = 'id';
    // Timestamps
    public $timestamps = false;
    
     public $fillable = [
        'plate_number',
        'vehicle_id'
       
    ];

    public function model(){
        return $this->belongsTo('App\VehicleModel','vehicle_id');
    }

    public function inspect(){
        return $this->hasMany('App\Inspection', 'owner_id');
    }

    
}
