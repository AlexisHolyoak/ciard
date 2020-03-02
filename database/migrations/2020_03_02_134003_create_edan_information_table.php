<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEdanInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edan_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('infraestructure_post_info_id')->unsigned();
            $table->foreign('infraestructure_post_info_id')->references('id')->on('infraestructures_post_info');
            $table->bigInteger('family_post_info_id')->unsigned();
            $table->foreign('family_post_info_id')->references('id')->on('families_post_info');
            $table->bigInteger('disaster_id')->unsigned();
            $table->foreign('disaster_id')->references('id')->on('disasters');
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
        Schema::dropIfExists('edan_information');
    }
}
