<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatCualidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_cualidades', function (Blueprint $table) {
            $table->increments('id_cualidad')->unsigned();
            $table->string('descripcion');
            $table->string('icono');
            $table->string('estado');            
            $table->timestamps();

            //modificadores            
            //$table->primary('id_cualidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_cualidades');
    }
}
