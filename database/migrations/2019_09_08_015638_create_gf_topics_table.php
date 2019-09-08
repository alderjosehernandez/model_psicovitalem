<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGfTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gf_topic', function (Blueprint $table) {
            $table->increments('id_topic')->unsigned();
            $table->string('estado');
            $table->string('titulo');
            $table->string('descripcion');
            $table->dateTime('fecha_crea');
            $table->integer('id_usuario_crea')->unsigned();
            $table->integer('id_foro')->unsigned();              
            $table->timestamps();


            //modificadores
            $table->foreign('id_foro')->references('id_foro')->on('gf_foros');
            $table->foreign('id_usuario_crea')->references('id_usuario')->on('usuarios');            
            //$table->primary('id_topic');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gf_topic');
    }
}
