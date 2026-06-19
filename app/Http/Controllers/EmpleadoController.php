<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Departamento;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleado::with('departamento')->get();
        return view('empleados.index', compact('empleados'));
    }

    public function create()
    {
        $departamentos = Departamento::all();
        return view('empleados.create', compact('departamentos'));
    }

    public function store(Request $request)
    {
        Empleado::create([
            'user_id' => 1,
            'departamento_id' => $request->departamento_id,
            'dni' => $request->dni,
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'cargo' => $request->cargo,
            'fecha_ingreso' => $request->fecha_ingreso,
            'activo' => 1
        ]);
        return redirect('/empleados')->with('success', 'Empleado registrado exitosamente.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $empleado = Empleado::findOrFail($id);
        $departamentos = Departamento::all();
        return view('empleados.edit', compact('empleado', 'departamentos'));
    }

    public function update(Request $request, string $id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->update([
            'departamento_id' => $request->departamento_id,
            'dni' => $request->dni,
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'cargo' => $request->cargo,
            'fecha_ingreso' => $request->fecha_ingreso
        ]);
        return redirect('/empleados')->with('success', 'Datos del empleado actualizados.');
    }

    public function destroy(string $id)
    {
        try {
            Empleado::findOrFail($id)->delete();
            return redirect('/empleados')->with('success', 'Empleado eliminado permanentemente.');
        } catch (QueryException $e) {
            return redirect('/empleados')->with('error', 'No se puede eliminar el empleado porque tiene evaluaciones o métricas asociadas.');
        }
    }
}