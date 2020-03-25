<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfraestructurePostInfo extends Model
{
    //
    protected $table = 'infraestructures_post_info';

    public function precondition(){
        return $this->belongsTo(InfraestructureInfo::class, 'infraestructure_info_id');
    }
    public function evaluator(){
        return $this->belongsTo(EdanEvaluator::class,'evaluator_id');
    }
    public function disaster(){
        return $this->belongsTo(Disaster::class,'disaster_id');
    }
}
