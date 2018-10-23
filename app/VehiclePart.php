<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehiclePart extends Model
{
    protected $table = 'vehicle_parts';
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'vehicle_id',
        'number',
        'description'
        
    ];



    public function models(){
        return $this->belongsTo('App\VehicleModel','vehicle_id', 'id');
    }
    
    public function material(){
        return $this->hasMany('App\Material','vehicle_part_id');
    }

    public function services()
    {
    return $this->belongsToMany( __NAMESPACE__ . '\\ServicePart', 'service_lists', 'part_id', 'service_id');
    }
}
