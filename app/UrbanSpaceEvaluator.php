<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UrbanSpaceEvaluator extends Pivot
{
    //
    protected $table = 'urban_spaces_evaluators';
    protected $fillable = [
        'evaluator_id',
        'urban_space_id',
    ];
}
