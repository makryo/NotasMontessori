<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('nom_alumno')->unsigned();
            $table->foreign('nom_alumno')->references('id')->on('alumnos');

            $table->bigInteger('grado_ins')->unsigned();
            $table->foreign('grado_ins')->references('id')->on('grados');

            $table->bigInteger('ciclos_ins')->unsigned();
            $table->foreign('ciclos_ins')->references('id')->on('ciclos');

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
        Schema::dropIfExists('inscripciones');
    }
}
