<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFormationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('user_formation');

        Schema::create('user_formation', function (Blueprint $table) {
            $table->engine = 'InnoDB';
			$table->unsignedInteger('user_id');
            $table->unsignedInteger('formation_id');
            $table->enum('status',['Accepted','Refused','Waiting'])->default('Waiting');
            $table->timestamps();
            $table->primary(['user_id','formation_id']);
        });

        Schema::table('user_formation', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('formation_id')->references('id')->on('formation');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_formation');
    }
}
