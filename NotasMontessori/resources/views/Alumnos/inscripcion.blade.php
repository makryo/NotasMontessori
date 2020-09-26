<?php  
$username = 'root';
$password = '';
$database = 'montessori';
$host = 'localhost';
?>

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
                    <input id="searchTerm" type="text" onkeyup="doSearch()" class="form-control" size="25" />
                    <table class="table table-responsive" id="datos">
                        <thead>
                        <tr>
                            <th>nombre completo</th>
                            <th>grado</th>
                            <th>codigo montessori</th>
                            <th>codigo mineduc</th>
                            <th>telefono del alumno</th>
                            <th>nombre del pme</th>
                            <th>telefono del pme</th>
                            <th>correo del pme</th>
                            <th>fecha de nacimiento</th>
                        </tr>
                        </thead>
                        <?php
                    
                    try {

                        $db_con = new PDO("mysql:host=$host; dbname=$database; charset=utf8", $username, $password);
                        $db_con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     }catch (PDOException $e){

                            echo $e->getMessage();
                            
                         }
                    $sql = 'select * from alumnos;';
                        
                        $result = $db_con->query($sql);
                        foreach ($result as $values) {
                        
                            echo "<tbody><tr><td scope='row'>"
                                . $values["nombre_comp"]
                                . "</td><td>"
                                . $values["grado"]
                                . "</td><td>"
                                . $values["cod_montessori"]
                                . "</td><td>"
                                . $values["cod_mineduc"]
                                . "</td><td>"
                                . $values["tel_alumno"]
                                . "</td><td>"
                                . $values["nombre_pme"]
                                . "</td><td>"
                                . $values["tel_pme"]
                                . "</td><td>"
                                . $values["correo_pme"]
                                . "</td><td>"
                                . $values["fechnac_alumno"]
                                . "</td></tr></tbody>";
                        }
                    ?>    
                    <tr class='noSearch hide'>
                        <td colspan="5"></td>
                    </tr>
                    </table>

                    
                    <br>  
                    <a href="/principal" type="button" class="btn btn-danger">Regresar</a>
                    <a href="#" class="boton">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection