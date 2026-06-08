<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Departamento;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleado::with('departamento')->get();

        return view(
            'empleados.index',
            compact('empleados')
        );
    }

    public function create()
    {
        $departamentos = Departamento::all();

        return view(
            'empleados.create',
            compact('departamentos')
        );
    }

    public function store(Request $request)
    {
        Empleado::create($request->all());

        return redirect('/empleados');
    }

    public function edit($id)
    {
        $empleado = Empleado::findOrFail($id);
        $departamentos = Departamento::all();

        return view(
            'empleados.edit',
            compact('empleado','departamentos')
        );
    }

    public function update(Request $request, $id)
    {
        $empleado = Empleado::findOrFail($id);

        $empleado->update($request->all());

        return redirect('/empleados');
    }

    public function destroy($id)
    {
        Empleado::findOrFail($id)->delete();

        return redirect('/empleados');
    }
}
