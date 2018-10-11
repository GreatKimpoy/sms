<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobService extends Model
{
    //
    protected $table = 'job_services';
	public $primaryKey = 'id';
    public $timestamps = false;

    public $fillable = [
        'job_id',
        'service_id',
        'sequence',
        'actual_time',
    ];

    public function service(){
        return $this->belongsTo('App\ServiceList','service_id');
    }

    public function job(){
        return $this->belongsTo('App\JobOrder','job_id');

    }
}
