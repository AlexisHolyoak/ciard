<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UrbanSpace extends Model
{
    //
    public function zone(){
        return $this->belongsTo(Zone::class);
    }
    public function buildings(){
        return $this->hasMany(Building::class);
    }
}
