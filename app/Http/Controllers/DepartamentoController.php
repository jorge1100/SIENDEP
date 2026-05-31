<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;

class DepartamentoController extends Controller
{
    /**
     * Mostrar todos los departamentos
     */
    public function index()
    {
        $departamentos = Departamento::all();

        return view(
            'departamentos.index',
            compact('departamentos')
        );
    }

    /**
     * Mostrar formulario de alta
     */
    public function create()
    {
        return view('departamentos.create');
    }

    /**
     * Guardar departamento
     */
    public function store(Request $request)
    {
        Departamento::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion
        ]);

        return redirect('/departamentos');
    }

    /**
     * Mostrar un departamento
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Mostrar formulario de edición
     */
    public function edit(string $id)
    {
        $departamento = Departamento::findOrFail($id);
        return view(
            'departamentos.edit',
            compact('departamento')
        );
    }

    /**
     * Actualizar departamento
     */
    public function update(Request $request, string $id)
    {
        $departamento = Departamento::findOrFail($id);
        $departamento->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion
        ]);
        return redirect('/departamentos');
    }

    /**
     * Eliminar departamento
     */
    public function destroy(string $id)
    {
        $departamento = Departamento::findOrFail($id);
        $departamento->delete();
        return redirect('/departamentos');
    }
}
