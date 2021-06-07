<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_address extends Model
{
    protected $guarded =[];
    public function area()
    {
        return $this->belongsTo('App\Models\area','area_id','id');
    }
}
