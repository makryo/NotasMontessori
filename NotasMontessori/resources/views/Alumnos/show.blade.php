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
                    <h1>Confirmar datos registrados</h1>
                    
                    <dl>
                    <div class="row">
                        <div class="col-6">
                            <dt>NombreCompleto</dt><dd>{{ $student->nombre_comp }}</dd>
                            <dt>Codigo montessori</dt><dd>{{ $student->cod_montessori }}</dd>
                            <dt>Codigo mineduc</dt><dd>{{ $student->cod_mineduc }}</dd>
                            <dt>Telefono del alumno</dt><dd>{{ $student->genero }}</dd>
                        </div>

                        <div class="col-6">
                            <dt>nombre del padre, madre o encargado</dt><dd>{{ $student->nombre_pme }}</dd>
                            <dt>telefono del padre, madre o encargado</dt><dd>{{ $student->tel_pme }}</dd>
                            <dt>Correo del padre, madre o encargado</dt><dd>{{ $student->correo_pme }}</dd>
                            <dt>Fecha de nacimiento del alumno</dt><dd>{{ $student->fechnac_alumno }}</dd>
                        </div>
                    </div>
                    </dl>
                    <br>  
                    <a href="{{ route ('alumnos.index')}}" type="button" class="btn btn-warning">Regresar</a>
                    <a href="{{ route('alumnos.edit', $student->id) }}" class="btn btn-success">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection