<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Departamento;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
 FrontIvan
        $empleados = Empleado::with('departamento')->get();

        return view(
            'empleados.index',
            compact('empleados')
        );
         $empleados = Empleado::with('departamento')->get();

        return view('empleados.index', compact('empleados'));
      main
    }

    public function create()
    {
 FrontIvan
        $departamentos = Departamento::all();

        return view(
            'empleados.create',
            compact('departamentos')
        );

         $departamentos = Departamento::all();

        return view('empleados.create', compact('departamentos'));
 main
    }

    public function store(Request $request)
{
    Empleado::create([
        'user_id' => auth()->id(), // Cambia '1' por el usuario logueado si es necesario
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

    return redirect('/empleados');
}

   public function edit($id)
{
    $empleado = Empleado::findOrFail($id);
    $departamentos = Departamento::all();

    return view('empleados.edit', compact('empleado', 'departamentos'));
}

   public function update(Request $request, $id)
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
        // Si necesitas actualizar 'activo', agrégalo aquí
    ]);

    return redirect('/empleados');
}

    public function destroy($id)
    {
 FrontIvan
        Empleado::findOrFail($id)->delete();

         Empleado::findOrFail($id)->delete();
 main

        return redirect('/empleados');
    }
}
