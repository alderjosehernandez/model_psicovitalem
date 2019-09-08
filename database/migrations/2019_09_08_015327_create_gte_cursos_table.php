<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGteCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gte_cursos', function (Blueprint $table) {
            $table->increments('id_curso')->unsigned();
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('imagen');
            $table->string('tipo_curso')->comment('si es taller, entrenamiento, streaming');
            $table->integer('id_curso_padre')->unsigned();
            $table->integer('id_tipo_curso')->unsigned();            
            $table->integer('id_area_curso')->unsigned();
            $table->integer('id_psicologo')->unsigned();
            $table->timestamps();


            //modificadores
            $table->foreign('id_tipo_curso')->references('id_tipo_curso')->on('cat_tipo_curso');
            $table->foreign('id_area_curso')->references('id_area')->on('cat_areas');
            $table->foreign('id_psicologo')->references('id_psicologo')->on('gpsi_psicologos');
            //$table->primary('id_curso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gte_cursos');
    }
}
