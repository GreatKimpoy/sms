<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicePart extends Model
{
    protected $table = 'service_parts';
	public $primaryKey = 'id';
    public $timestamps = false;

    public function service(){
        $this->belongsTo('App\ServiceList', 'service_id', 'id');
    }

    public function part(){
        $this->belongsTo('App\VehiclePart', 'part_id', 'id');
    }
}
