<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrimerBimestresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('primer_bimestres', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('alumno_id')->unsigned();
            $table->foreign('alumno_id')->references('id')->on('alumnos');
            
            $table->bigInteger('clase_id')->unsigned();
            $table->foreign('clase_id')->references('id')->on('clases');

            $table->string('nota');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('primer_bimestres');
    }
}
