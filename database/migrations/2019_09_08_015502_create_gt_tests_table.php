<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGtTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gt_test', function (Blueprint $table) {
            $table->increments('id_test')->unsigned();
            $table->string('titulo');
            $table->string('descripcion');
            $table->integer('grado')->comment('orden de prioridad del test. ejem: si es grado1 de ansiedad, o si es grado 2 de ansiedad (gravedad del problema)');
            $table->enum('tipo_test',['Inicial','Entrenamiento','General']);
            $table->string('estado');
            $table->integer('id_psicologo')->unsigned();
            $table->integer('id_area')->unsigned();
            $table->timestamps();


            //modificadores
            $table->foreign('id_psicologo')->references('id_psicologo')->on('gpsi_psicologos');
            $table->foreign('id_area')->references('id_area')->on('cat_areas');            
            //$table->primary('id_test');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gt_test');
    }
}
