<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGfForosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gf_foros', function (Blueprint $table) {
            $table->increments('id_foro')->unsigned();
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('estado');
            $table->string('imagen');
            $table->enum('tipo_foro',['General','Entrenamiento']);
            $table->dateTime('fecha');
            $table->integer('id_usuario_crea')->unsigned();            
            $table->timestamps();

            //modificadores
            $table->foreign('id_usuario_crea')->references('id_usuario')->on('usuarios');
            //$table->primary('id_foro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gf_foros');
    }
}
