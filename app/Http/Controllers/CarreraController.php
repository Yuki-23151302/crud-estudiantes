<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrera;

class CarreraController extends Controller
{
    public function index()
    {
        $carreras = Carrera::all();
        return view('carreras.index', compact('carreras'));
    }

    public function create()
    {
        return view('carreras.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required'
        ]);

        Carrera::create($request->only('nombre'));

        return redirect()->route('carreras.index')
                         ->with('success', 'Carrera registrada exitosamente');
    }

    public function edit(Carrera $carrera)
    {
        return view('carreras.edit', compact('carrera'));
    }

    public function update(Request $request, Carrera $carrera)
    {
        $request->validate([
            'nombre' => 'required'
        ]);

        $carrera->update($request->only('nombre'));

        return redirect()->route('carreras.index')
                         ->with('success', 'Carrera actualizada exitosamente');
    }

    public function destroy(Carrera $carrera)
    {
        $carrera->delete();

        return redirect()->route('carreras.index')
                         ->with('success', 'Carrera eliminada exitosamente');
    }
}