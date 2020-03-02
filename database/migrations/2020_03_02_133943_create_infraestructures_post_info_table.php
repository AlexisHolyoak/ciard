<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfraestructuresPostInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infraestructures_post_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('infraestructure_info_id')->unsigned();
            $table->foreign('infraestructure_info_id')->references('id')->on('infraestructures_info');
            $table->boolean('water')->default(0);
            $table->boolean('lights')->default(0);
            $table->boolean('natural_gas')->default(0);
            $table->boolean('public_transport')->default(0);
            $table->boolean('telecomunications')->default(0);
            $table->boolean('sewerage')->default(0);
            $table->string('condition');
            $table->string('basic_services_lost')->nullable();
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
        Schema::dropIfExists('infraestructures_post_info');
    }
}
