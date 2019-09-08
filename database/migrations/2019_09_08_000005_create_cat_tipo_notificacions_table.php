<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatTipoNotificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_tipo_notificacion', function (Blueprint $table) {
            $table->increments('id_tipo_notificacion')->unsigned();
            $table->string('descripcion');
            $table->string('color');
            $table->string('icono');                   
            $table->timestamps();


            //modificadores            
            //$table->primary('id_tipo_notificacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_tipo_notificacion');
    }
}
