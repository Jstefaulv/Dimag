<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_familias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NombreSubFamilia');
            $table->integer('idFamilia')->unsigned();
            $table->foreign('idFamilia')->references('id')->on('familias');
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
        Schema::dropIfExists('sub_familias');
    }
}
