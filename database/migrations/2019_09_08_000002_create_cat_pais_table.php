<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatPaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_pais', function (Blueprint $table) {
            $table->increments('id_pais')->unesigned();
            $table->string('nombre')->unique();
            $table->string('sigla');
            $table->string('estado');
            $table->timestamps();

            //modificadores
            
            //$table->primary('id_pais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_pais');
    }
}
