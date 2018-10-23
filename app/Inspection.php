<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    protected $table = 'inspections';
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'customer_id',
        'owner_id',
        'service_id',
        'additional_remarks',
        'isActive',
        
    ];

    

    public function inspection(){
        return $this->hasMany('App\InspectionHeader','inspection_id');
    }
    
    public function customer(){
        return $this->belongsTo('App\Customer','customer_id', 'id');
    }
    
    public function vehicle(){
        return $this->belongsTo('App\VehicleOwner','owner_id', 'id');
    }
    
    public function technician(){
        return $this->hasMany('App\InspectionTechnician','inspectionId')->where('isActive',1);
    }
}
