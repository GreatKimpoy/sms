<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspectionService extends Model
{
    protected $table = 'inspection_services';
    //Primary Key
	public $primaryKey = 'id';
    // Timestamps
    public $timestamps = false;
    protected $fillable = [
    	'inspection_id',
        'service_id'
    ];
}
