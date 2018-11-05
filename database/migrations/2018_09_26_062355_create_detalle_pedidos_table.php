<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Observacion')->default();
            $table->integer('cantidad');
            //$table->string('estado');
            $table->integer('idProducto')->index()->unsigned();
            $table->foreign('idProducto')->references('id')->on('productos');

            $table->integer('idPedido')->unsigned();
            $table->foreign('idPedido')->references('id')->on('pedidos');

            $table->integer('idMensaje')->unsigned()->nullable();
            $table->foreign('idMensaje')->references('id')->on('mensajes');
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
        Schema::dropIfExists('detalle_pedidos');
    }
}
