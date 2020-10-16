<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class horario extends Model
{
    protected $fillable = [
        'id',
        'hora', 
        'grado', 
        'clase', 
        'nom_maestro', 
        'dia'
    ];
    
}
