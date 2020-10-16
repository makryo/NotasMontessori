@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Inicio</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>
                    
                    <div class="row">
                        <div class="col-6">
                            <div class="card bg-light mb-3" style="max-width: 25rem;">
                                <div class="card-header">Alumnos</div>
                                <div class="card-body">
                                    <p class="card-text">Ingreso para nuevos alumnos y busqueda de datos.</p>
                                    <a href="{{ route('alumnos.create') }}"  class="btn btn-primary">Nuevo Alumno</a>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    <a href="{{ route('alumnos.index') }}" class="btn btn-primary">Ver datos registrados</a>
                                    <br>
                                </div>
                            </div>

                            <div class="card bg-light mb-3" style="max-width: 25rem;">
                                <div class="card-header">Maestros</div>
                                <div class="card-body">
                                    <p class="card-text">Seccion para el registro y busqueda de datos de los maestros.</p>
                                    <a href="{{ route('maestros.create') }}"  class="btn btn-primary">Nuevo maestro</a>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    <a href="{{ route('maestros.index') }}" class="btn btn-primary">Ver datos registrados</a>
                                    <br>
                                </div>
                            </div>  
                        </div>
                        
                        <div class="col-6">
                            <div class="card bg-light mb-3" style="max-width: 25rem;">
                                <div class="card-header">Horarios</div>
                                <div class="card-body">
                                    <p class="card-text">Seccion para el registro y busqueda de horarios de clases.</p>
                                    <a href="{{ route('horarios.create') }}"  class="btn btn-primary">Nuevo horario</a>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    <a href="{{ route('horarios.index') }}" class="btn btn-primary">Ver horarios</a>
                                    <br>
                                </div>
                            </div>

                            <div class="card bg-light mb-3" style="max-width: 25rem;">
                                <div class="card-header">Inscripciones</div>
                                <div class="card-body">
                                    <p class="card-text">Inscripciones para alumnos y busqueda de datos.</p>
                                    <a href="{{ route('inscripciones.create') }}"  class="btn btn-primary">Nueva inscripcion</a>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    <a href="{{ route('inscripciones.index') }}" class="btn btn-primary">Ver datos registrados</a>
                                    <br>
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
