<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatTipoPreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_tipo_pregunta', function (Blueprint $table) {
            $table->increments('id_tipo_pregunta');
            $table->string('tipo_pregunta');
            $table->string('estado');            
            $table->dateTime('fecha_crea');
            //$table->integer('id_usuario_crea')->unsigned();            
            $table->timestamps();


            //modificadores
            //$table->foreign('id_usuario_crea')->references('id_usuario')->on('usuarios');                 
            //$table->primary('id_tipo_pregunta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_tipo_pregunta');
    }
}
