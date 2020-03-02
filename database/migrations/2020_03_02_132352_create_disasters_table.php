<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disasters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('disaster_type_id')->unsigned();
            $table->foreign('disaster_type_id')->references('id')->on('disasters');
            $table->dateTime('date_time_disaster');
            $table->bigInteger('urban_space_id')->unsigned();
            $table->foreign('urban_space_id')->references('id')->on('urban_spaces');
            $table->bigInteger('building_id')->nullable();
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
        Schema::dropIfExists('disasters');
    }
}
