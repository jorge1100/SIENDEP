@extends('layouts.app')

@section('content')

    <div class="max-w-2xl mx-auto">
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-white">Nuevo Empleado</h1>
        </div>

        <div class="bg-zinc-800 p-8 rounded-lg shadow-lg border border-zinc-600">
            <form method="POST" action="/empleados" class="flex flex-col gap-5">
                @csrf

                <input type="text" name="dni" placeholder="DNI" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">

                <input type="text" name="nombre" placeholder="Nombre" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">

                <input type="text" name="apellido" placeholder="Apellido" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">

                <input type="text" name="telefono" placeholder="Teléfono" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">

                <input type="text" name="direccion" placeholder="Dirección" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">

                <input type="text" name="cargo" placeholder="Cargo" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">

                <input type="date" name="fecha_ingreso" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-zinc-400 focus:text-white focus:outline-none focus:border-blue-500 transition-colors">

                <select name="departamento_id" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                    @foreach($departamentos as $departamento)
                        <option value="{{ $departamento->id }}">
                            {{ $departamento->nombre }}
                        </option>
                    @endforeach
                </select>

                <div class="mt-2">
                    <button type="submit" class="bg-green-600 hover:bg-green-500 text-white font-bold py-3 px-6 rounded transition-colors shadow">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection