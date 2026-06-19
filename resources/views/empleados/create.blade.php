@extends('layouts.app')

@section('content')

    <div class="max-w-2xl mx-auto">
        <div class="mb-6 flex items-center gap-4">
            <a href="/empleados" class="text-zinc-400 hover:text-white transition-colors">&larr; Volver</a>
            <h1 class="text-3xl font-bold text-white">Nuevo Empleado</h1>
        </div>

        <div class="bg-gray-900 p-8 rounded-lg shadow-lg border border-zinc-600">
            <form method="POST" action="/empleados" class="flex flex-col gap-5">
                @csrf

                <input type="text" name="dni" placeholder="DNI" required class="w-full bg-gray-700 border border-gray-800 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">

                <input type="text" name="nombre" placeholder="Nombre" required class="w-full bg-gray-700 border border-gray-800 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">

                <input type="text" name="apellido" placeholder="Apellido" required class="w-full bg-gray-700 border border-gray-800 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">

                <!-- Teléfono y Dirección son opcionales en la BD -->
                <input type="text" name="telefono" placeholder="Teléfono (Opcional)" class="w-full bg-gray-700 border border-gray-800 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">

                <input type="text" name="direccion" placeholder="Dirección (Opcional)" class="w-full bg-gray-700 border border-gray-800 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">

                <input type="text" name="cargo" placeholder="Cargo" required class="w-full bg-gray-700 border border-gray-800 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">

                <input type="date" name="fecha_ingreso" required class="w-full bg-gray-700 border border-gray-800 rounded p-3 text-zinc-400 focus:text-white focus:outline-none focus:border-blue-500 transition-colors">

                <select name="departamento_id" required class="w-full bg-gray-700 border border-gray-800 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                    <option value="" disabled selected>-- Seleccione un departamento --</option>
                    @foreach($departamentos as $departamento)
                        <option value="{{ $departamento->id }}">
                            {{ $departamento->nombre }}
                        </option>
                    @endforeach
                </select>

                <div class="mt-2 flex justify-end">
                    <button type="submit" class="btn-save">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection