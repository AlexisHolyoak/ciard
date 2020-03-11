<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfraestructureType extends Model
{
    //
    public function infrastructures(){
        return $this->hasMany(InfraestructureInfo::class);
    }
}
