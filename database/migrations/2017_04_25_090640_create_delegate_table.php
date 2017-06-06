<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDelegateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('delegate');

        Schema::create('delegate', function (Blueprint $table) {
            $table->engine = 'InnoDB';
			$table->unsignedInteger('user_id');
            $table->unsignedInteger('delegate_id');
        });

        Schema::table('delegate', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('delegate_id')->references('id')->on('user');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delegate');
    }
}
