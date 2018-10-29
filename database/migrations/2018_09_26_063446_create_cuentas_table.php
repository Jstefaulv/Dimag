<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('MontoTotal');
            $table->integer('idMesa')->unsigned();
            $table->foreign('idMesa')->references('id')->on('mesas');
            $table->integer('idTipoPago')->unsigned();
            $table->foreign('idTipoPago')->references('id')->on('tipo_pagos');
            $table->integer('idPedido')->unsigned();
            $table->foreign('idPedido')->references('id')->on('pedidos');
            $table->integer('idCaja')->unsigned();
            $table->foreign('idCaja')->references('id')->on('cajas');
            $table->boolean('propina');
            $table->integer('montoPropina')->nullable()->unsigned();
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
        Schema::dropIfExists('cuentas');
    }
}
