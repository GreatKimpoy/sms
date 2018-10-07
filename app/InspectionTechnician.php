<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspectionTechnician extends Model
{
    protected $table = 'inspection_technicians';
    //Primary Key
	public $primaryKey = 'id';
    // Timestamps
    public $timestamps = false;
    
      protected $fillable = [
    	'inspection_id',
        'technician_id',
    
    ];
 

    public function inspection(){
        return $this->belongsTo('App\Inspection','inspection_id');
    }
    
    public function technician(){
        return $this->belongsTo('App\Technician','technician_id');
    }
}
