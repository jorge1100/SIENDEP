@extends('layouts.app')

@section('content')

    <div class="max-w-2xl mx-auto">
        <div class="mb-6 flex items-center gap-4">
            <a href="/detalle-evaluaciones" class="text-gray-400 hover:text-white transition-colors">&larr; Volver</a>
            <h1 class="text-3xl font-bold text-white">Nuevo Detalle de Evaluación</h1>
        </div>

        <div class="bg-gray-900 p-8 rounded-lg shadow-lg border border-gray-700">
            <form method="POST" action="/detalle-evaluaciones" class="flex flex-col gap-5">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Evaluación</label>
                    <select name="evaluacion_id" required class="w-full bg-gray-700 border border-gray-800 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                        <option value="" disabled selected>-- Seleccione una evaluación --</option>
                        @foreach($evaluaciones as $evaluacion)
                            <option value="{{ $evaluacion->id }}">
                                Evaluación #{{ $evaluacion->id }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Criterio</label>
                    <select name="criterio_id" required class="w-full bg-gray-700 border border-gray-800 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                        <option value="" disabled selected>-- Seleccione un criterio --</option>
                        @foreach($criterios as $criterio)
                            <option value="{{ $criterio->id }}">
                                {{ $criterio->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Calificación</label>
                    <input type="number" step="0.01" name="calificacion" required class="w-full bg-gray-700 border border-gray-800 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Comentario</label>
                    <textarea name="comentario" rows="4" required class="w-full bg-gray-700 border border-gray-800 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors"></textarea>
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