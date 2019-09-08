<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatProvinciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_provincia', function (Blueprint $table) {
            $table->increments('id_provincia');
            $table->string('nombre');
            $table->string('estado');        
            $table->integer('id_pais')->unesigned();
            $table->timestamps();

            //modificadores
            //$table->foreign('id_pais')->references('id_pais')->on('cat_pais');
            //$table->primary('id_provincia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_provincia');
    }
}
