<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'materials';
	public $primaryKey = 'id';
    public $timestamps = false;


    public function jobs()
    {
        return $this->belongsTo('App\Job', 'job_id', 'id');
    }

    public function parts()
    {
        return $this->belongsTo('App\VehiclePart', 'vehicle_part_id', 'id');
    }

}
