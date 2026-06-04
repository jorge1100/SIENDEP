<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Departamento;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $empleados = Empleado::with('departamento')->get();

        return view('empleados.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $departamentos = Departamento::all();

        return view('empleados.create', compact('departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     */
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
            return redirect('/empleados');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $empleado = Empleado::findOrFail($id);
        $departamentos = Departamento::all();

        return view(
            'empleados.edit',
            compact('empleado', 'departamentos')
        );
    }

    /**
     * Update the specified resource in storage.
     */
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

        return redirect('/empleados');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         Empleado::findOrFail($id)->delete();

        return redirect('/empleados');
    }
}
