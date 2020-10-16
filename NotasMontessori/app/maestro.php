<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maestro extends Model
{
    protected $fillable = [
        'id',
        'nom_comp', 
        'direccion', 
        'email', 
        'dpi', 
        'fechnac', 
        'genero',
        'num_tel'
    ];
}
