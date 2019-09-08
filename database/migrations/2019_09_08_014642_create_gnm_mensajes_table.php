<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGnmMensajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gnm_mensajes', function (Blueprint $table) {
            $table->increments('id_mensaje')->unsigned();
            $table->dateTime('fecha');
            $table->string('texto');
            $table->string('estado');
            $table->integer('id_usuario_recibe')->unsigned();
            $table->integer('id_usuario_envia')->unsigned();          
                    
            $table->timestamps();


            //modificadores
            $table->foreign('id_usuario_recibe')->references('id_usuario')->on('usuarios');
            $table->foreign('id_usuario_envia')->references('id_usuario')->on('usuarios');            
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
        Schema::dropIfExists('gnm_mensajes');
    }
}
