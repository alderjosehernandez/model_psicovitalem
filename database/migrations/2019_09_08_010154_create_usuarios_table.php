<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id_usuario')->unsigned();
            $table->string('nickname', 60);
            $table->string('nombres', 60);
            $table->string('apellidos', 60);
            $table->integer('id_empresa')->unsigned();
            $table->integer('id_coordinador');
            $table->string('dni', 60);
            $table->string('cargo');
            $table->integer('id_pais')->unsigned();
            $table->integer('id_provincia')->unsigned();            
            $table->string('departamento');
            $table->string('correo');
            $table->string('telefono');
            $table->string('fotografia');            
            $table->timestamps();


            //modificadores
            //$table->primary('id_usuarios');
            $table->foreign('id_empresa')->references('id_empresa')->on('cat_empresa');
            $table->foreign('id_pais')->references('id_pais')->on('cat_pais');
            $table->foreign('id_provincia')->references('id_provincia')->on('cat_provincia');
            
        });



    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
