<?php

use App\ciclo;
use App\grado;
use App\Alumno;

$ciclos = ciclo::all();
$grados = grado::all();
$estudiante = Alumno::all();

?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Editar registro</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Actualizar datos</h1>
                    <div class="container">
                    
                        <form method="post" action="{{ route('inscripciones.update', $Edita->id) }}">

                            @csrf
                            @method('PATCH')
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-6">
                                <br>
                                    <label>Nombre del alumno</label>
                                        <div class="input-group mb-3">
                                            <select name="nom_alumno" class="input-group mb-3 form-control" required>
                                                @foreach($estudiante as $Lista)
                                                    <option value="{{ $Lista->id }}">
                                                        {{ $Lista->nombre_comp }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    <br>

                                    <label>Grado</label>
                                        <div class="input-group mb-3">
                                            <select name="grado_ins" class="input-group mb-3 form-control" required>
                                                @foreach($grados as $Lista)
                                                    <option value="{{ $Lista->id }}">
                                                        {{ $Lista->nom_grado }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    <br>
                                </div>

                                <div class="col-6">
                                <br>
                                <label>Ciclo</label>
                                        <div class="input-group mb-3">
                                            <select name="ciclos_ins" class="input-group mb-3 form-control" required>
                                                @foreach($ciclos as $Lista)
                                                    <option value="{{ $Lista->id }}">
                                                        {{ $Lista->ciclo }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    <br>
                                </div>
                            </div>
                            <input type="submit" value="Guardar" class="btn btn-success">
                        </form>

                      
                
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection