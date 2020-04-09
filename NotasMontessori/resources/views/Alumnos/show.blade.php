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
                        <dt>NombreCompleto</dt><dd>{{ $student->nombre_completo }}</dd>
                        <dt>Grado</dt><dd>{{ $student->grado }}</dd>
                        <dt>Codigo montessori</dt><dd>{{ $student->cod_montessori }}</dd>
                        <dt>Codigo mineduc</dt><dd>{{ $student->cod_mineduc }}</dd>
                    </dl>
                    <br>  
                    <a href="/principal" type="button" class="btn btn-danger">Regresar</a>
                    <a href="{{ route('alumnos.edit', $student->id) }}" class="boton">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection