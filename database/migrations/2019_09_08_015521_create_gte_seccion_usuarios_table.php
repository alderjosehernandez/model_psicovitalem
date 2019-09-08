<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGteSeccionUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gte_seccion_usuario', function (Blueprint $table) {
            $table->integer('id_seccion')->unsigned();            
            $table->integer('id_usuario')->unsigned();
            $table->double('progreso',15,2);
            $table->timestamps();

            //modificadores
            $table->foreign('id_seccion')->references('id_seccion')->on('gte_secciones_curso');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            $table->primary(['id_seccion','id_usuario']);
            //$table->primary('id_usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gte_seccion_usuario');
    }
}
