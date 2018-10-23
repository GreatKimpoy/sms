<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    //
    protected $table = 'steps';
    public $primaryKey = 'id';
    public $timestamps = true;

    public $fillable = [
        'service_id',
        'sequence',
        'description',
        'time_consumed',
    ];
}
