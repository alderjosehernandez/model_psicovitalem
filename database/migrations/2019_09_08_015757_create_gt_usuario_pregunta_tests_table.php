<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGtUsuarioPreguntaTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gt_usuario_pregunta_test', function (Blueprint $table) {
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_pregunta_test')->unsigned();
            $table->integer('resultado');
            $table->string('respuesta');
            $table->string('estado');
            $table->integer('id_valor_pregunta')->unsigned();            
            $table->timestamps();


            //modificadores
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            $table->foreign('id_pregunta_test')->references('id_pregunta_test')->on('gt_pregunta_test');
            $table->foreign('id_valor_pregunta')->references('id_valor_pregunta')->on('cat_valor_pregunta');
            $table->primary(['id_usuario','id_pregunta_test']);
            //$table->primary('id_pregunta_test');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gt_usuario_pregunta_test');
    }
}
