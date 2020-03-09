<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipToUrbanSpacesEvaluators extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('urban_spaces_evaluators', function (Blueprint $table) {
            $table->foreign('evaluator_id')->references('id')->on('edan_evaluators');
            $table->foreign('urban_space_id')->references('id')->on('urban_spaces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('urban_spaces_evaluators', function (Blueprint $table) {
            //
        });
    }
}
