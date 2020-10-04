<?php  
$username = 'root';
$password = '';
$database = 'montessori';
$host = 'localhost';

use App\Alumno;

$alumno = Alumno::all();
?>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-13">
            <div class="card">
                <div class="card-header">Detalles de registro</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Detalles</h1>
                    
                    <input type="text" id="searchTerm" onkeyup="doSearch()" class="form-control">


                    <table class="table table-responsive" id="datos">
                        <thead>
                        <tr>
                            <th>nombre completo</th>
                            <th>grado</th>
                            <th>codigo montessori</th>
                            <th>codigo mineduc</th>
                            <th>telefono del alumno</th>
                            <th>nombre del pme</th>
                            <th>telefono del pme</th>
                            <th>correo del pme</th>
                            <th>fecha de nacimiento</th>
                            <th>detalles</th>
                        </tr>
                        </thead>

                        @foreach($alumno as $Lista)
                            <tr>
                                <td>{{ $Lista->nombre_comp }}</td>
                                <td>{{ $Lista->grado }}</td>
                                <td>{{ $Lista->cod_montessori }}</td>
                                <td>{{ $Lista->cod_mineduc }}</td>
                                <td>{{ $Lista->tel_alumno }}</td>
                                <td>{{ $Lista->nombre_pme }}</td>
                                <td>{{ $Lista->tel_pme }}</td>
                                <td>{{ $Lista->correo_pme }}</td>
                                <td>{{ $Lista->fechnac_alumno}}</td>
                                <td>
                                    <a href="{{ route('alumnos.show', $Lista->id) }}" class="btn btn-success">Detalles</a>    
                                </td>
                            </tr>
                        @endforeach
                          
                    <tr class='noSearch hide'>
                        <td colspan="5"></td>
                    </tr>
                    </table>

                    
                    <br>  
                    <a href="/principal" type="button" class="btn btn-danger">Regresar</a>
                    <a href="#" class="boton">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection