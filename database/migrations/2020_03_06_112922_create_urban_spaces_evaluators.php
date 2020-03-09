<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrbanSpacesEvaluators extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urban_spaces_evaluators', function (Blueprint $table) {
            $table->bigInteger('evaluator_id')->unsigned();
            $table->bigInteger('urban_space_id')->unsigned();
            $table->foreign('evaluator_id')->references('id')->on('edan_evaluators');
            $table->foreign('urban_space_id')->references('id')->on('urban_spaces');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('urban_spaces_evaluators');
    }
}
