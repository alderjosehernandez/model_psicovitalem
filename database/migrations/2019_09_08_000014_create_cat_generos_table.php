<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatGenerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_generos', function (Blueprint $table) {
            $table->increments('id_genero')->unsigned();
            $table->string('descripcion');
            $table->string('sigla');
            $table->string('estado');
            $table->timestamps();


            //modificadores           
            //$table->primary('id_genero');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_generos');
    }
}
