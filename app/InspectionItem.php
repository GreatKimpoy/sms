<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspectionItem extends Model
{
    protected $table = 'inspection_items';
    // Timestamps
    public $timestamps = false;
    
    protected $fillable = [
    	'name',
        'form',
    	'type_id',
        'active'	
    ];

    public function type()
    {
        return $this->belongsTo('App\InspectionType', 'type_id');
    }

}
