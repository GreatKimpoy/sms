<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspectionType extends Model
{
    protected $table = 'inspection_types';
    //Primary Key
	public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
    protected $fillable = [
    	'type',
        'active'
    ];
    
    public function item()
    {
        return $this->hasMany( __NAMESPACE__ . '\\InspectionItem', 'type_id')->where('active',1);
    }
}
