<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfraestructureInfo extends Model
{
    //
    protected $table = 'infraestructures_info';
    public function category(){
        return $this->belongsTo(InfraestructureType::class,'infraestructure_type_id');
    }
    public function boss(){
        return $this->belongsTo(FamilyInfo::class,'family_boss_id');
    }
    public function urbanspace(){
        return $this->belongsTo(UrbanSpace::class, 'urban_space_id');
    }
}
