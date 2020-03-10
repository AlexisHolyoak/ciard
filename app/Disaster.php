<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disaster extends Model
{
    //
    public function disastertype(){
        return $this->belongsTo(DisasterType::class,'disaster_type_id');
    }
    public function urbanspace(){
        return $this->belongsTo(UrbanSpace::class,'urban_space_id');
    }
}
