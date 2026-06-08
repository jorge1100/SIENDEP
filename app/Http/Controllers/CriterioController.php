<?php

namespace App\Http\Controllers;

use App\Models\Criterio;
use Illuminate\Http\Request;

class CriterioController extends Controller
{
    public function index()
    {
        $criterios = Criterio::all();

        return view(
            'criterios.index',
            compact('criterios')
        );
    }

    public function create()
    {
        return view('criterios.create');
    }

    public function store(Request $request)
    {
        Criterio::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'ponderacion' => $request->ponderacion
        ]);

        return redirect('/criterios');
    }

    public function edit($id)
    {
        $criterio = Criterio::findOrFail($id);

        return view(
            'criterios.edit',
            compact('criterio')
        );
    }

    public function update(Request $request, $id)
    {
        $criterio = Criterio::findOrFail($id);

        $criterio->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'ponderacion' => $request->ponderacion
        ]);

        return redirect('/criterios');
    }

    public function destroy($id)
    {
        Criterio::findOrFail($id)->delete();

        return redirect('/criterios');
    }
}