<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestaprofesorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestasprofesores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('profesor')->unsigned();
            $table->bigInteger('peticionesinformacion_id')->unsigned();
            $table->tinyInteger('comportamiento');
            $table->tinyInteger('nivelacademico');
            $table->text('observaciones')->nullable();
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
        Schema::dropIfExists('respuestasprofesores');
    }
}
