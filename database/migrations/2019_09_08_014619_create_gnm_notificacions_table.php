<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGnmNotificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gnm_notificacion', function (Blueprint $table) {
            $table->increments('id_notificacion')->unsigned();
            $table->string('ruta');
            $table->string('estado');
            $table->string('texto');            
            $table->integer('id_tipo_notificacion')->unsigned();            
            $table->integer('id_usuario')->unsigned();           
            
            $table->timestamps();


            //modificadores
            $table->foreign('id_tipo_notificacion')->references('id_tipo_notificacion')->on('cat_tipo_notificacion');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            
            //$table->primary('id_notificacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gnm_notificacions');
    }
}
