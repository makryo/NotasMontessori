<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = [
        'id',
        'nombre_comp',
        'cod_montessori', 
        'cod_mineduc', 
        'genero', 
        'nombre_pme', 
        'tel_pme',
        'correo_pme',
        'fechnac_alumno'
    ];

    public function Bimenstre1()
    {
    	return $this->belongsTo('App\PrimerBimestre');
    }

    public function Bimenstre2()
    {
    	return $this->belongsTo('App\SegundoBimestre');
    }

    public function Bimenstre3()
    {
    	return $this->belongsTo('App\TercerBimestre');
    }

    public function Bimenstre4()
    {
    	return $this->belongsTo('App\CuartoBimestre');
    }
}
