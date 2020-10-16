@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Detalles de registro</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Detalles</h1>
                    
                    <dl>
                    <div class="row">
                        <div class="col-6">
                            <dt>NombreCompleto</dt><dd>{{ $teacher->nom_comp }}</dd>
                            <dt>Direccion</dt><dd>{{ $teacher->direccion }}</dd>
                            <dt>Correo</dt><dd>{{ $teacher->email }}</dd>
                            <dt>Dpi</dt><dd>{{ $teacher->dpi }}</dd>
                        </div>

                        <div class="col-6">
                            <dt>Fecha de nacimiento</dt><dd>{{ $teacher->fechnac }}</dd>
                            <dt>Genero</dt><dd>{{ $teacher->genero }}</dd>
                            <dt>telefono del maestro</dt><dd>{{ $teacher->num_tel }}</dd>
                        </div>
                    </div>
                    </dl>
                    <br>  
                    <a href="{{ route ('maestros.index')}}" type="button" class="btn btn-danger">Regresar</a>
                    <a href="{{ route('maestros.edit', $teacher->id) }}" class="btn btn-success">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection