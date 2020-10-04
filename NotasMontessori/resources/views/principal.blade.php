@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Inscripciones
                    <a href="{{ route('alumnos.create') }}"  class="btn btn-primary">Nueva inscripcion</a>
                    <span class="glyphicon glyphicon-list-alt"></span>
                  
                    <a href="{{ route('alumnos.index') }}">Ver datos registradas</a>
                    <br>

                    Horarios

                    <a href="#">Nuevo horario</a>
                    <a href="#">Ver horarios</a>

                    <br>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
