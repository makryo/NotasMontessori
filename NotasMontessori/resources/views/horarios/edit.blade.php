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
                <div class="card-header">Editar registro</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Actualizar datos</h1>
                    <div class="container">
                    
                        <form method="post" action="{{ route('horarios.update', $Edita->id) }}">

                            @csrf
                            @method('PATCH')
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-6">
                                    <input type="text" name="hora" value="{{ $Edita->hora }}" required class="form-control">
                                    <br>
                                    <input type="text" name="grado" value="{{ $Edita->grado }}" required class="form-control">
                                    <br>
                                </div>

                                <div class="col-6">
                                    <input type="text" name="clase" value="{{ $Edita->clase }}" required class="form-control">
                                    <br>
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
                                    <input type="text" name="dia" value="{{ $Edita->dia }}" required class="form-control">
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
</div>
@endsection