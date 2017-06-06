<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormationSpecialtyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('formation_specialty');

        Schema::create('formation_specialty', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('formation_id');
            $table->unsignedInteger('specialty_id');
            $table->primary(['formation_id','specialty_id']);
        });

        Schema::table('formation_specialty', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('formation_id')->references('id')->on('formation');
            $table->foreign('specialty_id')->references('id')->on('specialty');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formation_specialty');
    }
}
