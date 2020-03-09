<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EdanEvaluator extends Model
{
    //
    protected $table = 'edan_evaluators';
    public function person(){
        return $this->belongsTo(Person::class);
    }
}
