<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ColumnasNulas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cruds', function (Blueprint $table) {
            $table->string('APELLIDOS', 27)->nullable()->change();
            $table->string('NOMBRES', 31)->nullable()->change();
            $table->string('SEXO', 9)->nullable()->change();
            $table->string('UNIVERSIDAD', 20)->nullable()->change();
            $table->string('CARRERA', 49)->nullable()->change();
            $table->string('ESTADO', 10)->nullable()->change();
            $table->string('MUNICIPIO', 16)->nullable()->change();
            $table->string('PARROQUIA', 16)->nullable()->change();
            $table->string('CENTRO', 50)->nullable()->change();
            $table->string('SECTOR', 50)->nullable()->change();
            $table->string('SUBSECTOR', 50)->nullable()->change();
            $table->string('VOTO', 2)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cruds', function (Blueprint $table) {
            $table->string('CEDULA', 8)->nullable(false)->change();
            $table->string('APELLIDOS', 27)->nullable(false)->change();
            $table->string('NOMBRES', 31)->nullable(false)->change();
            $table->string('SEXO', 9)->nullable(false)->change();
            $table->string('UNIVERSIDAD', 20)->nullable(false)->change();
            $table->string('CARRERA', 49)->nullable(false)->change();
            $table->string('ESTADO', 10)->nullable(false)->change();
            $table->string('MUNICIPIO', 16)->nullable(false)->change();
            $table->string('PARROQUIA', 16)->nullable(false)->change();
            $table->string('CENTRO', 50)->nullable(false)->change();
            $table->string('SECTOR', 50)->nullable(false)->change();
            $table->string('SUBSECTOR', 50)->nullable(false)->change();
            $table->string('VOTO', 2)->nullable(false)->change();
        });
    }
}