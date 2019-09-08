<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeUsuarioEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ge_usuario_eventos', function (Blueprint $table) {
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_evento')->unsigned();
            $table->dateTime('fecha_inscripcion');
            $table->timestamps();

            $table->primary(['id_usuario','id_evento']);
            //$table->primary('id_evento');

            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            $table->foreign('id_evento')->references('id_evento')->on('ge_eventos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ge_usuario_eventos');
    }
}
