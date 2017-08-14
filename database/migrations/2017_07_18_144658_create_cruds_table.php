<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cruds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('CEDULA', 8);
            $table->string('APELLIDOS', 27);
            $table->string('NOMBRES', 31);
            $table->string('SEXO', 9);
            $table->string('UNIVERSIDAD', 20);
            $table->string('CARRERA', 49);
            $table->string('ESTADO', 10);
            $table->string('MUNICIPIO', 16);
            $table->string('PARROQUIA', 16);
            $table->string('CENTRO', 50);
            $table->string('SECTOR', 50);
            $table->string('SUBSECTOR', 50);
            $table->string('VOTO', 2);
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
        Schema::dropIfExists('cruds');
    }
}