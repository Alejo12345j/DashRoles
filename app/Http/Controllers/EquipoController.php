<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class EquipoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-equipo|crear-equipo|editar-equipo|borrar-equipo', ['only' => ['index']]);
         $this->middleware('permission:crear-equipo', ['only' => ['create','store']]);
         $this->middleware('permission:editar-equipo', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-equipo', ['only' => ['destroy']]);
    }

    public function index()
    {
        //
        $equipos = Equipo::all();
        return view('equipos.index', compact('equipos'));

    }

    public function create()
    {
        //
        return view('equipos.crear');

    }

    public function store(Request $request)
    {
        //
        request()->validate([
            'nombreEquipo' => 'required',
            'tipo' => 'required',
            'marca' => 'required',
            'descripcionEquipo' => 'required', 
        ]);
        Equipo::create($request->all());

        return redirect()->route('equipos.index');

    }

    public function show($id)
    {
        //
    }

    public function edit(Equipo $equipo)
    {
        //
        return view('equipos.editar', compact('equipo'));

    }

    public function update(Request $request, Equipo $equipo)
    {
        //
        request()-> validate([
            'nombreEquipo' => 'required',
            'tipo' => 'required',
            'marca' => 'required',
            'descripcionEquipo' => 'required', 
        ]);
        $equipo->update($request->all());
        
        return redirect()->route('equipos.index');
    }

    public function destroy(Equipo $equipo)
    {
        //
        $equipo->delete();
        return redirect()->route('equipos.index');
    }
}
