<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ge_comentarios', function (Blueprint $table) {
            $table->increments('id_comentario')->unsigned();
            $table->integer('id_usuario')->unsigned();
            $table->string('cont_comentario');            
            $table->integer('id_evento')->unsigned();
            $table->timestamps();

            //modificadores    
            $table->foreign('id_evento')->references('id_evento')->on('ge_eventos');
            //$table->primary('id_comentario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ge_comentarios');
    }
}
