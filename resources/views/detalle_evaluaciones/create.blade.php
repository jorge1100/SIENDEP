@extends('layouts.app')

@section('content')

    <div class="max-w-2xl mx-auto">
        <div class="mb-6 flex items-center gap-4">
            <a href="/detalle-evaluaciones" class="text-zinc-400 hover:text-white transition-colors">&larr; Volver</a>
            <h1 class="text-3xl font-bold text-white">Nuevo Detalle de Evaluación</h1>
        </div>

        <div class="bg-zinc-800 p-8 rounded-lg shadow-lg border border-zinc-600">
            <form method="POST" action="/detalle-evaluaciones" class="flex flex-col gap-5">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Evaluación</label>
                    <select name="evaluacion_id" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                        @foreach($evaluaciones as $evaluacion)
                            <option value="{{ $evaluacion->id }}">
                                Evaluación #{{ $evaluacion->id }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Criterio</label>
                    <select name="criterio_id" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                        @foreach($criterios as $criterio)
                            <option value="{{ $criterio->id }}">
                                {{ $criterio->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Calificación</label>
                    <input type="number" step="0.01" name="calificacion" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Comentario</label>
                    <textarea name="comentario" rows="4" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors"></textarea>
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