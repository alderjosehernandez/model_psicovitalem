<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil_usuarios', function (Blueprint $table) {
            $table->increments('id_perfil')->unsigned();
            $table->string('preg1');
            $table->string('preg2');
            $table->string('preg3');
            $table->integer('id_usuario')->unsigned();
            $table->timestamps();

            //modificadores
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            //$table->primary('id_perfil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfil_usuarios');
    }
}
