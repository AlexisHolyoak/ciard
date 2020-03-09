<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EdanEvaluator extends Model
{
    //
    protected $table = 'edan_evaluators';
    protected $fillable = [
        'people_id','available'
    ];
    public function person(){
        return $this->belongsTo(Person::class);
    }
    public function urbanspaces(){
        return $this->belongsToMany(UrbanSpace::class,'urban_spaces_evaluators','evaluator_id','urban_space_id')->using(UrbanSpaceEvaluator::class)->withTimestamps();
    }
}
