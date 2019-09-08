<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGpsiMensajesPsicologosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gpsi_mensajes_psicologos', function (Blueprint $table) {
            $table->increments('id_mensaje')->unsigned();
            $table->string('titulo');
            $table->string('cuerpo');
            $table->string('estado');            
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_psicologo')->unsigned();
            $table->timestamps();


            //modificadores
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            $table->foreign('id_psicologo')->references('id_psicologo')->on('gpsi_psicologos');            
            //$table->primary('id_mensaje');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gpsi_mensajes_psicologos');
    }
}
