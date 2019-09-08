<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGfRespuestasTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gf_respuestas_topic', function (Blueprint $table) {
            $table->increments('id_respuesta')->unsigned();            
            $table->integer('id_topic')->unsigned();            
            $table->string('descripcion');
            $table->string('estado');
            $table->dateTime('fecha_crea');
            $table->integer('id_usuario')->unsigned();            
            $table->timestamps();


            //modificadores
            $table->foreign('id_topic')->references('id_topic')->on('gf_topic');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');            
            //$table->primary('id_respuesta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gf_respuestas_topic');
    }
}
