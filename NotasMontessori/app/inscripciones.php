<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inscripciones extends Model
{
    protected $fillable = [
        'id',
        'nom_alumno', 
        'grado_ins', 
        'ciclos_ins'
    ];
}
