@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Nuevo maestro</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Formulario para nuevo maestro</h1>
                    <div class="container">
                        

                        <form method="post" action="{{ route('maestros.store') }}">
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-6">
                                    <br>
                                    <label>Nombre Completo</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="nom_comp" required>
                                    </div>
                                    <br>
                                    <label>Direccion</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="direccion" required>
                                    </div>
                                    <br>
                                    <label>Correo</label>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                    <br>
                                    <label>Dpi</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" name="dpi" required>
                                    </div>
                                    <br>
                                </div>

                                <div class="col-6">
                                <br>
                                    <label>Fecha de nacimiento</label>
                                        <div class="input-group mb-3">
                                            <input type="date" class="form-control" name="fechnac" required>
                                        </div>
                                    <br>
                                    <label>genero</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="genero" required>
                                        </div>

                                        <br>
                                    <label>Numero de telefono del maestro</label>
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" name="num_tel" required>
                                        </div> 
                                </div>
                            </div>
                            <br>
                            <input type="submit" value="Guardar" class="btn btn-primary">
                            <a href="/principal" type="button" class="btn btn-danger">Regresar</a>
                        </form>

                        
                        
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection