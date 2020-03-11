<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyInfo extends Model
{
    //
    protected $table = 'families_info';

    public function person(){
        return $this->belongsTo(Person::class, 'people_id');
    }
}
