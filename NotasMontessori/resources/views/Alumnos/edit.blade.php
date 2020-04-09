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
                    
                        <form method="post" action="{{ route('alumnos.update', $Edita->id) }}">

                            @csrf
                            @method('PATCH')
                            {{ csrf_field() }}

                            <br>
                            <input type="text" name="nombre_completo" value="{{ $Edita->nombre_completo }}" required class="form-control">
                            <br>
                            <input type="text" name="grado" value="{{ $Edita->grado }}" required class="form-control">
                            <br>
                            <input type="text" name="cod_montessori" value="{{ $Edita->cod_montessori }}" required class="form-control">
                            <br>
                            <input type="text" name="cod_mineduc" value="{{ $Edita->cod_mineduc }}" required class="form-control">
                            <br>
                            <input type="submit" value="Guardar" class="btn btn-success">
                        </form>

                      
                
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection