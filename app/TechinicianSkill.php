<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TechinicianSkill extends Model
{
    //
    protected $table = 'technician_skills';
    //Primary Key
	public $primaryKey = 'id';
    // Timestamps
    public $timestamps = false;

    public function technician(){
        return $this->belongsTo('App\Technician','technician_id');
    }

    public function category(){
        return $this->belongsTo('App\ServiceCategory','category_id');
    }
}
