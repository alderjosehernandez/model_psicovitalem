 <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGpsiPsicologosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gpsi_psicologos', function (Blueprint $table) {
            $table->increments('id_psicologo')->unsigned();
            $table->string('no_colegiado');
            $table->string('cv_video');
            $table->string('cv_doc');
            $table->string('estado');
            $table->integer('id_area')->unsigned();
            //$table->integer('id_cualidad')->unsigned();            
            $table->timestamps();


            //modificadores
            
            $table->foreign('id_area')->references('id_area')->on('cat_areas');            
            //$table->primary('id_psicologo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gpsi_psicologos');
    }
}
