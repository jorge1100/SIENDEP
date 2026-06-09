@extends('layouts.app')

@section('content')

    <div class="max-w-2xl mx-auto">
        <div class="mb-6 flex items-center gap-4">
            <a href="/autoevaluaciones" class="text-zinc-400 hover:text-white transition-colors">&larr; Volver</a>
            <h1 class="text-3xl font-bold text-white">Editar Autoevaluación</h1>
        </div>

        <div class="bg-zinc-800 p-8 rounded-lg shadow-lg border border-zinc-600">
            <form method="POST" action="/autoevaluaciones/{{ $autoevaluacion->id }}" class="flex flex-col gap-5">
                @csrf
                @method('PUT')

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Empleado</label>
                    <select name="empleado_id" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                        @foreach($empleados as $empleado)
                            <option value="{{ $empleado->id }}" {{ $autoevaluacion->empleado_id == $empleado->id ? 'selected' : '' }}>
                                {{ $empleado->nombre }} {{ $empleado->apellido }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Periodo</label>
                    <select name="periodo_evaluacion_id" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                        @foreach($periodos as $periodo)
                            <option value="{{ $periodo->id }}" {{ $autoevaluacion->periodo_evaluacion_id == $periodo->id ? 'selected' : '' }}>
                                {{ $periodo->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Puntaje Total</label>
                    <input type="number" step="0.01" name="puntaje_total" value="{{ $autoevaluacion->puntaje_total }}" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Comentarios</label>
                    <textarea name="comentarios" rows="4" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">{{ $autoevaluacion->comentarios }}</textarea>
                </div>

                <div class="mt-4 flex justify-end">
                    <button type="submit" class="bg-yellow-600 hover:bg-yellow-500 text-white font-bold py-2 px-6 rounded transition-colors shadow">
                        Actualizar
                    </button>
                </div>

            </form>
        </div>
    </div>

@endsection