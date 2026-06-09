@extends('layouts.app')

@section('content')

    <div class="max-w-2xl mx-auto">
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-white">Editar Empleado</h1>
        </div>

        <div class="bg-zinc-800 p-8 rounded-lg shadow-lg border border-zinc-600">
            <form method="POST" action="/empleados/{{ $empleado->id }}" class="flex flex-col gap-5">
                @csrf
                @method('PUT')

                <input type="text" name="dni" value="{{ $empleado->dni }}" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">

                <input type="text" name="nombre" value="{{ $empleado->nombre }}" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">

                <input type="text" name="apellido" value="{{ $empleado->apellido }}" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">

                <input type="text" name="telefono" value="{{ $empleado->telefono }}" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">

                <input type="text" name="direccion" value="{{ $empleado->direccion }}" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">

                <input type="text" name="cargo" value="{{ $empleado->cargo }}" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">

                <input type="date" name="fecha_ingreso" value="{{ $empleado->fecha_ingreso }}" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-zinc-400 focus:text-white focus:outline-none focus:border-blue-500 transition-colors">

                <select name="departamento_id" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                    @foreach($departamentos as $departamento)
                        <option value="{{ $departamento->id }}" {{ $empleado->departamento_id == $departamento->id ? 'selected' : '' }}>
                            {{ $departamento->nombre }}
                        </option>
                    @endforeach
                </select>

                <div class="mt-2">
                    <button type="submit" class="bg-yellow-600 hover:bg-yellow-500 text-white font-bold py-3 px-6 rounded transition-colors shadow">
                        Actualizar
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection