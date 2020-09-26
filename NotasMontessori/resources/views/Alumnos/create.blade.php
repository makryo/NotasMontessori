@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Nueva Inscripcion</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Nuevo formulario de inscripcion</h1>
                    <div class="container">
                        

                        <form method="post" action="{{ route('alumnos.store') }}">
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-6">
                                    <br>
                                    <label>NombreCompleto</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="nombre_comp" required>
                                    </div>
                                    <br>
                                    <label>Grado</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="grado" required>
                                    </div>
                                    <br>
                                    <label>Cod_montessori</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" name="cod_montessori" required>
                                    </div>
                                    <br>
                                    <label>Cod_mineduc</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="cod_mineduc" required>
                                    </div>
                                    <br>
                                    <label>Numero de telefono del alumno</label>
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" name="tel_alumno" required>
                                        </div>
                                </div>

                                <div class="col-6">
                                <br>
                                    <label>Nombre del padre, madre o encargado</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="nombre_pme" required>
                                        </div>
                                    <br>
                                    <label>Numero de telefono del padre, madre o encargado</label>
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" name="tel_pme" required>
                                        </div>

                                        <br>
                                    <label>Correo electronico del padre</label>
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" name="correo_pme" required>
                                        </div>

                                        <br>
                                    <label>Fecha de nacimiento</label>
                                        <div class="input-group mb-3">
                                            <input type="date" class="form-control" name="fechnac_alumno" required>
                                        </div>
                                </div>
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