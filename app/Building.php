<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    //
    public function urbanSpace(){
        return $this->belongsTo(UrbanSpace::class);
    }
}
