<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyPostInfo extends Model
{
    //
    protected $table = 'families_post_info';
    public function precondition(){
        return $this->belongsTo(FamilyInfo::class,'family_info_id');
    }
    public function disaster(){
        return $this->belongsTo(Disaster::class,'disaster_id');
    }
}
