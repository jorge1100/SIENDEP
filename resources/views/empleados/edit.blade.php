@extends('layouts.app')

@section('content')

    <div class="max-w-2xl mx-auto">
        <div class="mb-6 flex items-center gap-4">
            <a href="/empleados" class="text-zinc-400 hover:text-white transition-colors">&larr; Volver</a>
            <h1 class="text-3xl font-bold text-white">Editar Empleado</h1>
        </div>

        <div class="bg-zinc-800 p-8 rounded-lg shadow-lg border border-zinc-600">
            <form method="POST" action="/empleados/{{ $empleado->id }}" class="flex flex-col gap-5">
                @csrf
                @method('PUT')

                <input type="text" name="dni" value="{{ $empleado->dni }}" required class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">

                <input type="text" name="nombre" value="{{ $empleado->nombre }}" required class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">

                <input type="text" name="apellido" value="{{ $empleado->apellido }}" required class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">

                <input type="text" name="telefono" value="{{ $empleado->telefono }}" placeholder="Teléfono (Opcional)" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">

                <input type="text" name="direccion" value="{{ $empleado->direccion }}" placeholder="Dirección (Opcional)" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">

                <input type="text" name="cargo" value="{{ $empleado->cargo }}" required class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">

                <input type="date" name="fecha_ingreso" value="{{ $empleado->fecha_ingreso }}" required class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-zinc-400 focus:text-white focus:outline-none focus:border-blue-500 transition-colors">

                <select name="departamento_id" required class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                    <option value="" disabled>-- Seleccione un departamento --</option>
                    @foreach($departamentos as $departamento)
                        <option value="{{ $departamento->id }}" {{ $empleado->departamento_id == $departamento->id ? 'selected' : '' }}>
                            {{ $departamento->nombre }}
                        </option>
                    @endforeach
                </select>

                <div class="mt-2 flex justify-end">
                    <button type="submit" class="btn-update">
                        Actualizar
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection