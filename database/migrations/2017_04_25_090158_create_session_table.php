<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->dateTime('date');
			$table->unsignedInteger('number_of_place')->default(0);
			$table->unsignedInteger('formation_id');
            $table->timestamps();
        });

        Schema::table('session', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('formation_id')->references('id')->on('formation')->onDelete('cascade');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('session');
    }
}
