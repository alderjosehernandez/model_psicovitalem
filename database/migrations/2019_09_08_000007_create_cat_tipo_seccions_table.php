<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatTipoSeccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_tipo_seccion', function (Blueprint $table) {
            $table->increments('id_tipo_seccion')->unsigned();
            $table->string('descripcion');
            $table->string('estado');            
            $table->timestamps();


            //modificadores            
            //$table->primary('id_tipo_seccion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_tipo_seccion');
    }
}
