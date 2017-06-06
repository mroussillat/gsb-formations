<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsibleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('responsible');

        Schema::create('responsible', function (Blueprint $table) {
            $table->engine = 'InnoDB';
			$table->unsignedInteger('delegate_id');
            $table->unsignedInteger('responsible_id');
        });

        Schema::table('responsible', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('delegate_id')->references('user_id')->on('delegate');
            $table->foreign('responsible_id')->references('delegate_id')->on('delegate');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responsible');
    }
}
