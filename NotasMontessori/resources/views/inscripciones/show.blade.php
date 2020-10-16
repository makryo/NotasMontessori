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
                            <dt>Id de estudiante</dt><dd>{{ $ingreso->nom_alumno }}</dd>
                            <dt>Id de grado</dt><dd>{{ $ingreso->grado_ins }}</dd>
                        </div>

                        <div class="col-6">
                            <dt>Id de ciclo</dt><dd>{{ $ingreso->ciclos_ins }}</dd>
                        </div>
                    </div>
                    </dl>
                    <br>  
                    <a href="{{ route ('inscripciones.index')}}" type="button" class="btn btn-warning">Regresar</a>
                    <a href="{{ route('inscripciones.edit', $ingreso->id) }}" class="btn btn-success">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection