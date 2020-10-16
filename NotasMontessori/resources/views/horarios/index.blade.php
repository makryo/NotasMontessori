<?php
$horarioDia = DB::select('select horarios.id, hora, dia, grado, clase, maestros.nom_comp from horarios, maestros
where horarios.nom_maestro = maestros.id');

$horarioMaestro = DB::select('select hora, dia, maestros.nom_comp, grado, clase from horarios, maestros
where horarios.nom_maestro = maestros.id');

$horarioGrado = DB::select('select hora, dia, grado, clase from horarios');
?>
@extends('layouts.app')

@section('content')

<ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Tabla Principal</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Tabla 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Tabla 3</a>
    </li>
    <li class="nav-item">
      <a href="/principal" type="button" class="btn btn-danger">Regresar</a>
    </li>
</ul>

<div class="container">
  <div class="tab-content align-content-lg-center">
    <div id="home" class="container tab-pane active"><br>
      <h3>Tabla Principal</h3>
      <br>
      <input type="text" id="searchTerm" onkeyup="doSearch()" class="form-control col-7">

      <table class="table table-responsive table-striped col-7" id="datos">
        <thead>
          <tr>
            <th>Hora</th>
            <th>Dia</th>
            <th>Grado</th>
            <th>Clase</th>
            <th>Nombre del maestro</th>
          </tr>
        </thead>

        @foreach($horarioDia as $Lista)
          <tr>
            <td>{{ $Lista->hora }}</td>
            <td>{{ $Lista->dia }}</td>
            <td>{{ $Lista->grado }}</td>
            <td>{{ $Lista->clase }}</td>
            <td>{{ $Lista->nom_comp }}</td>
            <td>
              <a href="{{ route('horarios.show', $Lista->id) }}" class="btn btn-success">Detalles</a>    
              <br>
            </td>
          </tr>
        @endforeach
                            
        <tr class='noSearch hide'>
          <td colspan="5"></td>
        </tr>
      </table>    
    </div>   

      
      <div id="menu1" class="container tab-pane fade"><br>
        <h3>Tabla 2</h3>
        <br>
        <input type="text" id="searchTerm" onkeyup="doSearch()" class="form-control col-6">

        <table class="table table-responsive table-striped col-6" id="datos">
          <thead>
            <tr>
              <th>Hora</th>
              <th>Dia</th>
              <th>Nombre del maestro</th>
              <th>Grado</th>
              <th>Clase</th>
            </tr>
          </thead>

          @foreach($horarioMaestro as $Lista)
            <tr>
              <td>{{ $Lista->hora }}</td>
              <td>{{ $Lista->dia }}</td>
              <td>{{ $Lista->nom_comp }}</td>
              <td>{{ $Lista->grado }}</td>
              <td>{{ $Lista->clase }}</td>                              
            </tr>
          @endforeach
                              
          <tr class='noSearch hide'>
            <td colspan="5"></td>
          </tr>
        </table>
      </div>
      
      <div id="menu2" class="container tab-pane fade"><br>
        <h3>Tabla 3</h3>
        <br>
        <input type="text" id="searchTerm" onkeyup="doSearch()" class="form-control col-6">

        <table class="table table-responsive table-striped col-6" id="datos">
          <thead>
            <tr>
              <th>Hora</th>
              <th>Dia</th>
              <th>Grado</th>
              <th>Clase</th>
            </tr>
          </thead>

          @foreach($horarioGrado as $Lista)
            <tr>
              <td>{{ $Lista->hora }}</td>
              <td>{{ $Lista->dia }}</td>
              <td>{{ $Lista->grado }}</td>
              <td>{{ $Lista->clase }}</td>                 
            </tr>
          @endforeach
                              
          <tr class='noSearch hide'>
            <td colspan="5"></td>
          </tr>
        </table>
      </div>
  </div>
</div>
@endsection