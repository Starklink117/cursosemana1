<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $estudiantes = Estudiante::all();
        return view('estudiante.index',compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $estudiantes = new Estudiante();

        $estudiantes->matricula = $request->get('matricula');
        $estudiantes->nombre = $request->get('nombre');
        $estudiantes->apellidopaterno = $request->get('apellidopaterno');
        $estudiantes->apellidomaterno = $request->get('apellidomaterno');
        $estudiantes->correo = $request->get('correo');

        $estudiantes->save();

        return redirect('/estudiantes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estudiante $estudiante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estudiante $estudiante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estudiante $estudiante)
    {
        //
    }
}
