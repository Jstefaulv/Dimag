<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locals', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('nombreLocal');
            $table->string('direccionLocal');
            $table->integer('estadoLocal');
            $table->string('personaContactoLocal')->nullable();
            $table->string('horarioAtencionLocal')->nullable();
            $table->integer('idComuna')->unsigned();
            $table->foreign('idComuna')->references('id')->on('comunas');
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
        Schema::dropIfExists('locals');
    }
}
