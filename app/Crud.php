<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
	//Simplemente definimos el nombre de la tabla, los campos que pueden ser asignamos manualmente y los que no ($fillable / $guarded).

    protected $table = 'cruds'; 

    public $primaryKey = 'id';
    
    protected $fillable = ['cedula','apellidos','nombres','sexo','universidad','carrera','estado','municipio','parroquia','centro','sector','subsector','voto','telefono'];
}