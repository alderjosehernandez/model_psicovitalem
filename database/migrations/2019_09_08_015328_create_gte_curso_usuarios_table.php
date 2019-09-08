<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGteCursoUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gte_curso_usuarios', function (Blueprint $table) {
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_curso')->unsigned();
            $table->string('estado');
            $table->date('fecha_inicial');
            $table->date('fecha_final');            
            $table->double('progreso',15,2);
            $table->timestamps();


            //modificadores
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            $table->foreign('id_curso')->references('id_curso')->on('gte_cursos');
            
            $table->primary(['id_usuario','id_curso']);
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
        Schema::dropIfExists('gte_curso_usuarios');
    }
}
