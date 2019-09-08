<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGpsiSolicitudPsicologosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gpsi_solicitud_psicologos', function (Blueprint $table) {
            $table->increments('id_solicitud')->unsigned();
            $table->string('no_autorizacion');
            $table->string('descripcion_solicitud');
            $table->string('estado');            
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_psicologo')->unsigned();            
            $table->timestamps();

            //modificadores
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            $table->foreign('id_psicologo')->references('id_psicologo')->on('gpsi_psicologos');            
            //$table->primary('id_solicitud');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gpsi_solicitud_psicologos');
    }
}
