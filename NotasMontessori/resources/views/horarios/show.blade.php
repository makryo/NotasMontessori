@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Detalles del horario</div>

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
                            <dt>Hora</dt><dd>{{ $horari->hora }}</dd>
                            <dt>Grado</dt><dd>{{ $horari->grado }}</dd>
                            <dt>Clase</dt><dd>{{ $horari->clase }}</dd>
                            
                        </div>

                        <div class="col-6">
                            <dt>Id del maestro</dt><dd>{{ $horari->nom_maestro }}</dd>
                            <dt>Dia correspondiente</dt><dd>{{ $horari->dia }}</dd>
                        </div>
                    </div>
                    </dl>
                    <br>  
                    <a href="{{ route ('horarios.index')}}" type="button" class="btn btn-danger">Regresar</a>
                    <a href="{{ route('horarios.edit', $horari ?? ''->id) }}" class="btn btn-success">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection