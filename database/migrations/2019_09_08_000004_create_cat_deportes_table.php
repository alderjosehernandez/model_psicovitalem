<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatDeportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_deportes', function (Blueprint $table) {
            $table->increments('id_deporte')->unsigned();
            $table->string('nombre');
            $table->string('estado');            
            $table->string('icono');            
            $table->timestamps();

            //modificadores            
            //$table->primary('id_deporte');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_deportes');
    }
}
