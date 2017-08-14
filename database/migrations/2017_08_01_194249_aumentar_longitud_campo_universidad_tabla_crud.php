<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AumentarLongitudCampoUniversidadTablaCrud extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cruds', function (Blueprint $table) {
            $table->string('APELLIDOS')->change();
            $table->string('NOMBRES')->change();
            $table->string('SEXO')->change();
            $table->string('UNIVERSIDAD')->change();
            $table->string('CARRERA')->change();
            $table->string('ESTADO')->change();
            $table->string('MUNICIPIO')->change();
            $table->string('PARROQUIA')->change();
            $table->string('CENTRO')->change();
            $table->string('SECTOR')->change();
            $table->string('SUBSECTOR')->change();
            $table->string('VOTO')->change();
            $table->string('TELEFONO')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
