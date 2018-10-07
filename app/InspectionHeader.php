<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspectionHeader extends Model
{
    protected $table = 'inspection_headers';
    //Primary Key
	public $primaryKey = 'id';
    // Timestamps
    public $timestamps = false;
    
    protected $fillable = [
        'inspection_id',
        'item_id',
        'remarks',
    	
    ];

    public function inspection(){
        return $this->belongsTo('App\Inspection','inspection_id');
    }

    
    public function item(){
        return $this->belongsTo('App\InspectionItem','item_id');
    }
}
