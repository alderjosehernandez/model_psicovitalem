<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatValorPreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_valor_pregunta', function (Blueprint $table) {
            $table->increments('id_valor_pregunta');
            $table->string('descripcion');
            $table->integer('id_tipo_pregunta')->unsigned();
            $table->string('estado');                        
            $table->timestamps();


            //modificadores            
            $table->foreign('id_tipo_pregunta')->references('id_tipo_pregunta')->on('cat_tipo_pregunta');
            //$table->primary('id_valor_pregunta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_valor_pregunta');
    }
}
