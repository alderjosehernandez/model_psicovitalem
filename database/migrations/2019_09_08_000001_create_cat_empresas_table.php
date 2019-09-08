<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_empresa', function (Blueprint $table) {            
            $table->increments('id_empresa');
            $table->string('nombre_empresa');
            $table->integer('id_empresa_padre');
            $table->string('logo');           
            $table->date('invoiced_at');
            $table->date('due_at');
            $table->timestamps();
            
            //DB::statement('ALTER TABLE cat_empresa MODIFY id_empresa INTEGER NOT NULL AUTO_INCREMENT');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_empresa');
    }
}
