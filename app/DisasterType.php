<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisasterType extends Model
{
    //
    public function disaster(){
        return $this->hasMany(Disaster::class);
    }
}
