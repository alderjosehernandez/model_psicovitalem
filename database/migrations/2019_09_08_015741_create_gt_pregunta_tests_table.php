<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGtPreguntaTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gt_pregunta_test', function (Blueprint $table) {
            $table->increments('id_pregunta_test')->unsigned();
            $table->string('estado');
            $table->string('descripcion_pregunta');
            $table->integer('id_test')->unsigned();
            $table->integer('id_tipo_pregunta')->unsigned();
            $table->dateTime('fecha');
            $table->timestamps();


            //modificadores
            $table->foreign('id_test')->references('id_test')->on('gt_test');
            $table->foreign('id_tipo_pregunta')->references('id_tipo_pregunta')->on('cat_tipo_pregunta');             
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
        Schema::dropIfExists('gt_pregunta_tests');
    }
}
