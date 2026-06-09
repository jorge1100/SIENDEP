@extends('layouts.app')

@section('content')

    <div class="max-w-2xl mx-auto">
        <div class="mb-6 flex items-center gap-4">
            <a href="/periodos" class="text-zinc-400 hover:text-white transition-colors">&larr; Volver</a>
            <h1 class="text-3xl font-bold text-white">Editar Período</h1>
        </div>

        <div class="bg-zinc-800 p-8 rounded-lg shadow-lg border border-zinc-600">
            <form method="POST" action="/periodos/{{ $periodo->id }}" class="flex flex-col gap-5">
                @csrf
                @method('PUT')

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Nombre</label>
                    <input type="text" name="nombre" value="{{ $periodo->nombre }}" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Fecha Inicio</label>
                    <input type="date" name="fecha_inicio" value="{{ $periodo->fecha_inicio }}" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-zinc-400 focus:text-white focus:outline-none focus:border-blue-500 transition-colors">
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Fecha Fin</label>
                    <input type="date" name="fecha_fin" value="{{ $periodo->fecha_fin }}" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-zinc-400 focus:text-white focus:outline-none focus:border-blue-500 transition-colors">
                </div>

                <div class="flex items-center gap-2 mt-2">
                    <input type="checkbox" name="activo" value="1" {{ $periodo->activo ? 'checked' : '' }} class="w-5 h-5 accent-blue-600 bg-zinc-900 border-zinc-600 rounded focus:ring-blue-500">
                    <label class="text-sm font-medium text-zinc-300">Activo</label>
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