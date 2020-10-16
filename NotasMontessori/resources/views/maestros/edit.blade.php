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
                    
                        <form method="post" action="{{ route('maestros.update', $Edita->id) }}">

                            @csrf
                            @method('PATCH')
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-6">
                                    <input type="text" name="nom_comp" value="{{ $Edita->nom_comp }}" required class="form-control">
                                    <br>
                                    <input type="text" name="direccion" value="{{ $Edita->direccion }}" required class="form-control">
                                    <br>
                                    <input type="email" name="email" value="{{ $Edita->email }}" required class="form-control">
                                    <br>
                                    <input type="number" name="dpi" value="{{ $Edita->dpi }}" required class="form-control">
                                    <br>
                                </div>

                                <div class="col-6">
                                    <input type="date" name="fechnac" value="{{ $Edita->fechnac }}" required class="form-control">
                                    <br>
                                    <input type="text" name="genero" value="{{ $Edita->genero }}" required class="form-control">
                                    <br>
                                    <input type="number" name="num_tel" value="{{ $Edita->num_tel}}" required class="form-control">
                                    <br>                                    
                                </div>
                            </div>
                            <input type="submit" value="Guardar" class="btn btn-success">
                        </form>

                      
                
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection