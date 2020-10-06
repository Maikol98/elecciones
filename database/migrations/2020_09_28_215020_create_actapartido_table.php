<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActapartidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actapartido', function (Blueprint $table) {
            $table->integer('id_acta')->unsigned();
            $table->integer('id_partido')->unsigned();
            $table->primary(['id_acta', 'id_partido']);
            $table->integer('cant_votos_pres');
            $table->integer('cant_votos_dip');
            $table->foreign('id_acta')->references('id')->on('actas');
            $table->foreign('id_partido')->references('id')->on('partidos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actapartido');
    }
}
