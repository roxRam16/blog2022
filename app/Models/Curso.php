<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //ASIGNACION MASIVA

    #forma 1
    #protected $fillable = ['name', 'description', 'category'];

    #forma2 SE DEJA VACIO, EN CASO DE QUE SE QUIERAN AGREGAR TODOS LOS CAMPOS, SINO, SE MANDA UN ARREGLO CON LOS CAMPOS LOS CUALES NO QUEREMOS QUE SE AGREGUEN
    protected $guarded = [];

    
}
