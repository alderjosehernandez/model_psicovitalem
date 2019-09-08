<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatCategoriaAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_categoria_area', function (Blueprint $table) {
            $table->increments('id_categoria')->unsigned();
            $table->string('descripcoin');
            $table->string('estado');
            $table->timestamps();

            //modificadores            
            //$table->primary('id_categoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_categoria_area');
    }
}
