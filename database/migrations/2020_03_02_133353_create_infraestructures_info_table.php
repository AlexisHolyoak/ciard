<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfraestructuresInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infraestructures_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('urban_space_id')->unsigned();
            $table->foreign('urban_space_id')->references('id')->on('urban_spaces');
            $table->bigInteger('infraestructure_type_id')->unsigned();
            $table->foreign('infraestructure_type_id')->references('id')->on('infraestructure_types');
            $table->bigInteger('edan_evaluator_id')->unsigned();
            $table->foreign('edan_evaluator_id')->references('id')->on('edan_evaluators');
            $table->bigInteger('family_boss_id')->unsigned();
            $table->foreign('family_boss_id')->references('id')->on('families_info');
            $table->bigInteger('building_id')->nullable();
            $table->integer('number');
            $table->boolean('tenencia')->default(1);
            $table->string('usage_condition');
            $table->string('roof');
            $table->string('wall');
            $table->string('floor');
            $table->integer('floors_number');
            $table->boolean('water')->default(0);
            $table->boolean('sewerage')->default(0);
            $table->boolean('lights')->default(0);
            $table->boolean('natural_gas')->default(0);
            $table->boolean('public_transport')->default(0);
            $table->boolean('telecomunications')->default(0);            
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
        Schema::dropIfExists('infraestructures_info');
    }
}
