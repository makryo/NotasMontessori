<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Alumno;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('apiAlumnos', function() {
    return Alumno::all();
});

Route::get('apiAlumnos/getter/{id}', function($id) {
    return Alumno::find($id);
});

Route::post('apiAlumnos', function(Request $request) {
    
    return Alumno::create($request->all());
});

Route::put('apiAlumnos/{id}', function(Request $request, $id) {
    $apialumno = Alumno::findOrFail($id);
    $apialumno->update($request->all());

    return $apialumno;
});

Route::delete('apiAlumnos/{id}', function($id) {
    Alumno::find($id)->delete();

    return 204;
});

Route::get('apialumnos', 'ArticleController@index');
Route::get('apialumnos/getter/{alumno}', 'ArticleController@show');
Route::post('apialumnos', 'ArticleController@store');
Route::put('apialumnos/{alumno}', 'ArticleController@update');
Route::delete('apialumnos/{alumno}', 'ArticleController@delete');