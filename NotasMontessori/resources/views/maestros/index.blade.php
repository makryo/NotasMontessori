<?php  
use App\maestro;

$maestro = maestro::all();
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
                            <th>direccion</th>
                            <th>correo</th>
                            <th>Dpi</th>
                            <th>Fecha de nacimiento</th>
                            <th>Genero</th>
                            <th>numero de telefono</th>
                            <th>detalles</th>
                        </tr>
                        </thead>

                        @foreach($maestro as $Lista)
                            <tr>
                                <td>{{ $Lista->nom_comp }}</td>
                                <td>{{ $Lista->direccion }}</td>
                                <td>{{ $Lista->email }}</td>
                                <td>{{ $Lista->dpi }}</td>
                                <td>{{ $Lista->fechnac }}</td>
                                <td>{{ $Lista->genero }}</td>
                                <td>{{ $Lista->num_tel }}</td>
                                <td>
                                    <a href="{{ route('maestros.show', $Lista->id) }}" class="btn btn-success">Detalles</a>    
                                    <br>
                                    <br>
                                    <form method="post" action="{{ route('maestros.destroy', $Lista->id) }}">
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
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection