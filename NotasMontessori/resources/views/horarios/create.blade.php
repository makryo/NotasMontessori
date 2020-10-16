<?php
use App\maestro;

$maestro = maestro::all();
?>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Nuevo horario</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Formulario para nuevo horario</h1>
                    <div class="container">
                        

                        <form method="post" action="{{ route('horarios.store') }}">
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-6">
                                    <br>
                                    <label>Hora</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="hora" required>
                                    </div>
                                    <br>
                                    <label>Grado</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="grado" required>
                                    </div>
                                    <br>
                                    
                                </div>
                                
                                <div class="col-6">
                                <br>
                                    <label>Clase</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="clase" required>
                                        </div>
                                    <br>
                                    <label>Nombre del maestro</label>
                                        <div class="input-group mb-3">
                                            <select name="nom_maestro" class="input-group mb-3" required>
                                                @foreach($maestro as $Lista)
                                                    <option value="{{ $Lista->id }}">
                                                        {{ $Lista->nom_comp }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    <br>

                                    <label>Dia</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="dia" required>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            <br>
                            <input type="submit" value="Guardar" class="btn btn-primary">
                            <a href="/principal" type="button" class="btn btn-danger">Regresar</a>
                        </form>

                        
                        
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection