<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('NumeroMesa');
            $table->integer('capacidad');
            $table->string('estado');
            $table->integer('cantidad')->nullable();
            $table->integer('idSector')->unsigned();
            $table->foreign('idSector')->references('id')->on('sectores');
            $table->integer('idTipoMesa')->unsigned();
            $table->foreign('idTipoMesa')->references('id')->on('tipo_mesas');
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
        Schema::dropIfExists('mesas');
    }
}
