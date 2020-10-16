<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/principal', function () {
	return view('principal');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/alumnos', 'AlumnosController');
Route::resource('/horarios', 'HorarioController');
Route::resource('/maestros', 'MaestroController');
Route::resource('/inscripciones', 'InscripcionesController');
