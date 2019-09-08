<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGpsiPsicologosCualidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gpsi_psicologos_cualidad', function (Blueprint $table) {
            $table->integer('id_psicologo')->unsigned();            
            $table->integer('id_cualidad')->unsigned();
            $table->dateTime('fecha_registro');
            $table->timestamps();

            $table->primary(['id_psicologo','id_cualidad']);
            //$table->primary('id_cualidad');
            //modificadores
            $table->foreign('id_psicologo')->references('id_psicologo')->on('gpsi_psicologos');
            $table->foreign('id_cualidad')->references('id_cualidad')->on('cat_cualidades');            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gpsi_psicologos_cualidad');
    }
}
