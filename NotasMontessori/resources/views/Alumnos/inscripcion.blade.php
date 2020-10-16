<?php  
use App\Alumno;

$alumno = Alumno::all();
?>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-13">
            <div class="card">
                <div class="card-header">Estudiantes ingresados</div>
                    
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
                            <th>nombre completo</th>
                            <th>codigo montessori</th>
                            <th>codigo mineduc</th>
                            <th>genero</th>
                            <th>nombre del pme</th>
                            <th>numero del pme</th>
                            <th>correo del pme</th>
                            <th>fecha de nacimiento</th>
                            <th>detalles</th>
                        </tr>
                        </thead>

                        @foreach($alumno as $Lista)
                            <tr>
                                <td>{{ $Lista->nombre_comp }}</td>
                                <td>{{ $Lista->cod_montessori }}</td>
                                <td>{{ $Lista->cod_mineduc }}</td>
                                <td>{{ $Lista->genero }}</td>
                                <td>{{ $Lista->nombre_pme }}</td>
                                <td>{{ $Lista->tel_pme }}</td>
                                <td>{{ $Lista->correo_pme }}</td>
                                <td>{{ $Lista->fechnac_alumno}}</td>
                                <td>
                                    <a href="{{ route('alumnos.show', $Lista->id) }}" class="btn btn-success">Detalles</a>    
                                    <br>
                                    <br>
                                    <form method="post" action="{{ route('alumnos.destroy', $Lista->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Borrar" class="btn btn-danger">
                                    </form>
                                </td>
                                
                            </tr>
                        @endforeach
                          
                    <tr class='noSearch hide'>
                        <td colspan="5"></td>
                    </tr>
                    </table>

                    
                    <br>  
                    <a href="/principal" type="button" class="btn btn-danger">Regresar</a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#apiAlumno">Nueva inscripcion</button>
                    
                    <div class="modal fade" id="apiAlumno" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Nueva Inscripcion</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                
                                <div class="modal-body">
                                    <form method="post" action="http://127.0.0.1:8000/api/apiAlumnos/">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-6">
                                                <br>
                                                <label>NombreCompleto</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" name="nombre_comp" required>
                                                </div>
                                                <br>
                                                <label>Cod_montessori</label>
                                                <div class="input-group mb-3">
                                                    <input type="number" class="form-control" name="cod_montessori" required>
                                                </div>
                                                <br>
                                                <label>Cod_mineduc</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" name="cod_mineduc" required>
                                                </div>
                                                <br>
                                                <label>Genero</label>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" name="genero" required>
                                                    </div>
                                            </div>

                                            <div class="col-6">
                                            <br>
                                                <label>Nombre del padre, madre o encargado</label>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" name="nombre_pme" required>
                                                    </div>
                                                <br>
                                                <label>Numero de telefono del padre, madre o encargado</label>
                                                    <div class="input-group mb-3">
                                                        <input type="number" class="form-control" name="tel_pme" required>
                                                    </div>

                                                    <br>
                                                <label>Correo electronico del padre</label>
                                                    <div class="input-group mb-3">
                                                        <input type="email" class="form-control" name="correo_pme" required>
                                                    </div>

                                                    <br>
                                                <label>Fecha de nacimiento</label>
                                                    <div class="input-group mb-3">
                                                        <input type="date" class="form-control" name="fechnac_alumno" required>
                                                    </div>
                                            </div>
                                        </div>
                                        <br>
                                        <input type="submit" value="Guardar" class="btn btn-primary">
                                    </form>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection