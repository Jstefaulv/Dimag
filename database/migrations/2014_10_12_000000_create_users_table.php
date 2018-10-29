<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('codigo')->nullable();
            $table->integer('rol')->index()->unsigned();
            $table->foreign('rol')->references('id')->on('Roles');
            $table->rememberToken();
            $table->timestamps();
        });

        /*
$table->foreign('rol_id')->references('id')->on('rols');
            $table->foreign('user_id')->references('id')->on('users');
        */

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
