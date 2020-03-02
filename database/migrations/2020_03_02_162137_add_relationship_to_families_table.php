<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipToFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('families_info', function (Blueprint $table) {
            $table->bigInteger('infraestructure_info_id')->unsigned();
            $table->foreign('infraestructure_info_id')->references('id')->on('infraestructures_info');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('families_info', function (Blueprint $table) {
            //
        });
    }
}
