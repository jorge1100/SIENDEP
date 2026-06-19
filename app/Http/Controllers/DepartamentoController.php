<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;

class DepartamentoController extends Controller
{
    public function index()
    {
        $departamentos = Departamento::all();
        return view('departamentos.index', compact('departamentos'));
    }

    public function create()
    {
        return view('departamentos.create');
    }

    public function store(Request $request)
    {
        Departamento::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion
        ]);
        return redirect('/departamentos')->with('success', 'Departamento creado exitosamente.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $departamento = Departamento::findOrFail($id);
        return view('departamentos.edit', compact('departamento'));
    }

    public function update(Request $request, string $id)
    {
        $departamento = Departamento::findOrFail($id);
        $departamento->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion
        ]);
        return redirect('/departamentos')->with('success', 'Departamento actualizado correctamente.');
    }

    public function destroy(string $id)
    {
        return redirect('/departamentos')->with('error', 'Por regla de negocio del sistema, los departamentos no se pueden eliminar.');
    }
}