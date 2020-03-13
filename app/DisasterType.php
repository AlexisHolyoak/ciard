<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisasterType extends Model
{
    //
    public function disasters(){
        return $this->hasMany(Disaster::class);
    }
    public function danger(){
        return $this->belongsTo(Danger::class,'danger_id');
    }
}
