<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UrbanSpace extends Model
{
    //
    protected $fillable = [
        'evaluator_id',
        'urban_space_id',
    ];
    public function zone(){
        return $this->belongsTo(Zone::class);
    }
    public function buildings(){
        return $this->hasMany(Building::class);
    }
    public function evaluators(){
        return $this->belongsToMany(EdanEvaluator::class,'urban_spaces_evaluators','urban_space_id','evaluator_id')->using(UrbanSpaceEvaluator::class)->withTimestamps();
    }
}
