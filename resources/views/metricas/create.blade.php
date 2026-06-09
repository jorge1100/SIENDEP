@extends('layouts.app')

@section('content')

    <div class="max-w-2xl mx-auto">
        <div class="mb-6 flex items-center gap-4">
            <a href="/metricas" class="text-zinc-400 hover:text-white transition-colors">&larr; Volver</a>
            <h1 class="text-3xl font-bold text-white">Nueva Métrica</h1>
        </div>

        <div class="bg-zinc-800 p-8 rounded-lg shadow-lg border border-zinc-600">
            <form method="POST" action="/metricas" class="flex flex-col gap-5">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Empleado</label>
                    <select name="empleado_id" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                        @foreach($empleados as $empleado)
                            <option value="{{ $empleado->id }}">
                                {{ $empleado->nombre }} {{ $empleado->apellido }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Tipo</label>
                    <input type="text" name="tipo" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Valor</label>
                    <input type="number" step="0.01" name="valor" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Fecha</label>
                    <input type="date" name="fecha" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-zinc-400 focus:text-white focus:outline-none focus:border-blue-500 transition-colors">
                </div>

                <div class="mt-4 flex justify-end">
                    <button type="submit" class="bg-green-600 hover:bg-green-500 text-white font-bold py-2 px-6 rounded transition-colors shadow">
                        Guardar
                    </button>
                </div>

            </form>
        </div>
    </div>

@endsection