<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatTipoCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_tipo_curso', function (Blueprint $table) {
            $table->increments('id_tipo_curso')->unsigned();
            $table->string('descripcion');
            $table->string('estado');
            $table->timestamps();

            //modificadores            
            //$table->primary('id_tipo_curso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_tipo_curso');
    }
}
