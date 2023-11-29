<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-estu|crear-estu|editar-estu|borrar-estu', ['only' => ['index']]);
         $this->middleware('permission:crear-estu', ['only' => ['create','store']]);
         $this->middleware('permission:editar-estu', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-estu', ['only' => ['destroy']]);
    }

    public function index()
    {
        //
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    public function create()
    {
        //
        return view('estudiantes.crear');
    }

    public function store(Request $request)
    {
        //
        request()->validate([
            'nombreC' => 'required',
            'noCuenta' => 'required',
            'grado' => 'required',
        ]);
        Estudiante::create($request->all());

        return redirect()->route('estudiantes.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(Estudiante $estudiante)
    {
        //
        return view('estudiantes.editar', compact('estudiante'));
    }

    public function update(Request $request, Estudiante $estudiante)
    {
        //
        request()->validate([
            'nombreC' => 'required',
            'noCuenta' => 'required',
            'grado' => 'required',
        ]);
        $estudiante->update($request->all());
        return redirect()->route('estudiantes.index');
    }
 
    public function destroy(Estudiante $estudiante)
    {
        //
        $estudiante->delete();
        return redirect()->route('estudiantes.index');
    }
}
