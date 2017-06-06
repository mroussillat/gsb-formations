<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('user');

        Schema::create('user', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('firstname', 255);
			$table->string('surname', 255);
			$table->string('login', 255);
			$table->string('password', 255);
            $table->unsignedInteger('phone')->nullable();
			$table->string('adress', 255);
			$table->unsignedInteger('postal_code')->default(0);
			$table->string('city', 255);
			$table->date('hiring_date');
            $table->rememberToken();
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
        Schema::dropIfExists('user');
    }
}
