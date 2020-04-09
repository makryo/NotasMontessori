@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Nuevo Registro</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Nuevo alumno</h1>
                    <div class="container">
                        <form method="post" action="{{ route('alumnos.store') }}">
                            {{ csrf_field() }}
                            <br>
                            <label>NombreCompleto</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="nombre_completo" required>
                            </div>
                            <br>
                            <label>Grado</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="grado" required>
                            </div>
                            <br>
                            <label>Cod_montessori</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="cod_montessori" required>
                            </div>
                            <br>
                            <label>Cod_mineduc</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="cod_mineduc" required>
                            </div>
                            <br>
                            <input type="submit" value="Guardar" class="btn btn-primary">
                        </form>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection