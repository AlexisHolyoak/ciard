<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliesPostInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('families_post_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('family_info_id')->unsigned();
            $table->foreign('family_info_id')->references('id')->on('families_info');
            $table->bigInteger('disaster_id')->unsigned();
            $table->foreign('disaster_id')->references('id')->on('disasters');
            $table->bigInteger('evaluator_id')->unsigned();
            $table->foreign('evaluator_id')->references('id')->on('edan_evaluators');
            $table->string('condition');
            $table->string('personal_damage');
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
        Schema::dropIfExists('families_post_info');
    }
}
