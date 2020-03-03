<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //
    public function province(){
        return $this->belongsTo(Province::class);
    }
    public function zones(){
        return $this->hasMany(Zone::class);
    }
}
