<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGteSeccionesCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gte_secciones_curso', function (Blueprint $table) {
            $table->increments('id_seccion');
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('url');
            $table->integer('no_seccion');
            $table->string('estado');
            $table->integer('id_curso')->unsigned();
            $table->integer('id_test')->unsigned();
            $table->integer('id_foro')->unsigned();                       
            $table->timestamps();


            //modificadores
            $table->foreign('id_curso')->references('id_curso')->on('gte_cursos');
            $table->foreign('id_test')->references('id_test')->on('gt_test');
            $table->foreign('id_foro')->references('id_foro')->on('gf_foros');            
            //$table->primary('id_seccion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gte_secciones_curso');
    }
}
