@extends('layouts.app')

@section('content')

    <div class="max-w-2xl mx-auto">
        <div class="mb-6 flex items-center gap-4">
            <a href="/detalle-evaluaciones" class="text-zinc-400 hover:text-white transition-colors">&larr; Volver</a>
            <h1 class="text-3xl font-bold text-white">Editar Detalle de Evaluación</h1>
        </div>

        <div class="bg-zinc-800 p-8 rounded-lg shadow-lg border border-zinc-600">
            <form method="POST" action="/detalle-evaluaciones/{{ $detalle->id }}" class="flex flex-col gap-5">
                @csrf
                @method('PUT')

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Evaluación</label>
                    <select name="evaluacion_id" required class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                        @foreach($evaluaciones as $evaluacion)
                            <option value="{{ $evaluacion->id }}" {{ $detalle->evaluacion_id == $evaluacion->id ? 'selected' : '' }}>
                                Evaluación #{{ $evaluacion->id }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Criterio</label>
                    <select name="criterio_id" required class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                        @foreach($criterios as $criterio)
                            <option value="{{ $criterio->id }}" {{ $detalle->criterio_id == $criterio->id ? 'selected' : '' }}>
                                {{ $criterio->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Calificación</label>
                    <input type="number" step="0.01" name="calificacion" value="{{ $detalle->calificacion }}" required class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Comentario</label>
                    <textarea name="comentario" rows="4" required class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">{{ $detalle->comentario }}</textarea>
                </div>

                <div class="mt-4 flex justify-end">
                    <button type="submit" class="btn-update">
                        Actualizar
                    </button>
                </div>

            </form>
        </div>
    </div>

@endsection