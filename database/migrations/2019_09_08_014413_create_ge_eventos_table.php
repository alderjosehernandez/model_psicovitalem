<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ge_eventos', function (Blueprint $table) {
            $table->increments('id_evento')->unsigned();
            $table->string('descripcion');
            $table->integer('id_provincia')->unsigned();
            $table->integer('id_deporte')->unsigned();
            $table->integer('id_genero')->unsigned();
            $table->dateTime('fecha');
            $table->time('hora');
            $table->integer('no_participantes');
            $table->string('asunto');
            $table->integer('id_usuario_coordinador')->unsigned();
            $table->string('estado');
            $table->string('localidad')->comment('direccion del evento');
            $table->integer('id_usuario')->unsigned();
            $table->timestamps();

            //modificadores
            $table->foreign('id_provincia')->references('id_provincia')->on('cat_provincia');
            $table->foreign('id_deporte')->references('id_deporte')->on('cat_deportes');
            $table->foreign('id_genero')->references('id_genero')->on('cat_generos');
            $table->foreign('id_usuario_coordinador')->references('id_usuario')->on('usuarios');
            //$table->primary('id_evento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ge_eventos');
    }
}
