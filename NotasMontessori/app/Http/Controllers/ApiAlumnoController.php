<?php

namespace App\Http\Controllers;

use App\Alumno;
use Illuminate\Http\Request;

class ApiAlumnoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return Alumno::all();
    }

    public function show(Alumno $apialumno)
    {
        return $apialumno;
    }

    public function store(Request $request)
    {
        $apialumno = Alumno::create($request->all());
        return response()->json($apialumno, 201);
    }

    public function update(Request $request, Alumno $apialumno)
    {
        $apialumno->update($request->all());
        return response()->json($apialumno, 200);
    }

    public function delete(Alumno $apialumno)
    {
        $apialumno->delete();
        return response()->json(null, 204);
    }
}
