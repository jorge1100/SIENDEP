@extends('layouts.app')

@section('content')

    <div class="max-w-2xl mx-auto">
        <div class="mb-6 flex items-center gap-4">
            <a href="/metricas" class="text-zinc-400 hover:text-white transition-colors">&larr; Volver</a>
            <h1 class="text-3xl font-bold text-white">Nueva Métrica</h1>
        </div>

        <div class="bg-gray-900 p-8 rounded-lg shadow-lg border border-zinc-600">
            <form method="POST" action="/metricas" class="flex flex-col gap-5">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Empleado</label>
                    <select name="empleado_id" required class="w-full bg-gray-700 border border-gray-800 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                        <option value="" disabled selected>-- Seleccione un empleado --</option>
                        @foreach($empleados as $empleado)
                            <option value="{{ $empleado->id }}">
                                {{ $empleado->nombre }} {{ $empleado->apellido }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Tipo</label>
                    <input type="text" name="tipo" required class="w-full bg-gray-700 border border-gray-800 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Valor</label>
                    <input type="number" step="0.01" name="valor" required class="w-full bg-gray-700 border border-gray-800 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Fecha</label>
                    <input type="date" name="fecha" required class="w-full bg-gray-700 border border-gray-800 rounded p-3 text-zinc-400 focus:text-white focus:outline-none focus:border-blue-500 transition-colors">
                </div>

                <div class="mt-4 flex justify-end">
                    <button type="submit" class="btn-save">
                        Guardar
                    </button>
                </div>

            </form>
        </div>
    </div>

@endsection