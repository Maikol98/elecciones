<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   //270
        Schema::create('mesa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero');
            $table->integer('codigo');
            $table->string('rango');
            $table->integer('capacidad');
            $table->integer('id_recinto')->insigned();
            $table->foreign('id_recinto')->references('id')->on('recintos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mesa');
    }
}
