<?php  
$tablaInscrip = DB::select('select inscripciones.id, alumnos.cod_montessori, alumnos.nombre_comp, grados.nom_grado, ciclos.ciclo 
from inscripciones, ciclos, alumnos, grados
where inscripciones.ciclos_ins = ciclos.id
and inscripciones.nom_alumno = alumnos.id
and inscripciones.grado_ins = grados.id
order by alumnos.cod_montessori asc');
?>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-13">
            <div class="card">
                <div class="card-header">Estudiantes inscritos</div>
                    
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Detalles</h1>
                    <br>
                    <input type="text" id="searchTerm" onkeyup="doSearch()" class="form-control">

                    <table class="table table-responsive" id="datos">
                        <thead>
                        <tr>
                            <th>codigo montessori</th>
                            <th>nombre completo</th>
                            <th>grado</th>
                            <th>ciclo</th>
                            <th>detalles</th>
                        </tr>
                        </thead>

                        @foreach($tablaInscrip as $Lista)
                            <tr>
                                <td>{{ $Lista->cod_montessori }}</td>
                                <td>{{ $Lista->nombre_comp }}</td>
                                <td>{{ $Lista->nom_grado }}</td>
                                <td>{{ $Lista->ciclo }}</td>
                                <td>
                                    <a href="{{ route('inscripciones.show', $Lista->id) }}" class="btn btn-success">Detalles</a>    
                                    <br>
                                </td>
                                
                            </tr>
                        @endforeach
                          
                    <tr class='noSearch hide'>
                        <td colspan="5"></td>
                    </tr>
                    </table>

                    
                    <br>  
                    <a href="/principal" type="button" class="btn btn-danger">Regresar</a>         
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection