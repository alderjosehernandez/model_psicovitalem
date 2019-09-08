<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_areas', function (Blueprint $table) {
            $table->increments('id_area')->unsigned();
            $table->string('descripcion');
            $table->string('estado');
            $table->integer('id_categoria')->unsigned();
            $table->timestamps();

            //modificadores
            $table->foreign('id_categoria')->references('id_categoria')->on('cat_categoria_area');            
            //$table->primary('id_area');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_areas');
    }
}
