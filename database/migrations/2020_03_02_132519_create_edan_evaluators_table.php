<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEdanEvaluatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edan_evaluators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('people_id')->unsigned();
            $table->foreign('people_id')->references('id')->on('people');
            $table->boolean('available')->default(1);
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
        Schema::dropIfExists('edan_evaluators');
    }
}
