<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobTechnician extends Model
{
    protected $table = 'job_technicians';
	public $primaryKey = 'id';
    public $timestamps = false;

    public $fillable = [
        'job_id',
        'technician_id',
    ];

    public function technician(){
        return $this->belongsTo('App\Technician','technician_id');
    }

    public function jobs(){
        return $this->hasMany('App\JobOrder','job_id');
    }
}
