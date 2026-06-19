@extends('layouts.app')

@section('content')

    <div class="max-w-2xl mx-auto">
        <div class="mb-6 flex items-center gap-4">
            <a href="/periodos" class="text-zinc-400 hover:text-white transition-colors">&larr; Volver</a>
            <h1 class="text-3xl font-bold text-white">Nuevo Período</h1>
        </div>

        <div class="bg-gray-900 p-8 rounded-lg shadow-lg border border-zinc-600">
            <form method="POST" action="/periodos" class="flex flex-col gap-5">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Nombre</label>
                    <input type="text" name="nombre" required class="w-full bg-gray-700 border border-gray-800 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Fecha Inicio</label>
                    <input type="date" name="fecha_inicio" required class="w-full bg-gray-700 border border-gray-800 rounded p-3 text-zinc-400 focus:text-white focus:outline-none focus:border-blue-500 transition-colors">
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Fecha Fin</label>
                    <input type="date" name="fecha_fin" required class="w-full bg-gray-700 border border-gray-800 rounded p-3 text-zinc-400 focus:text-white focus:outline-none focus:border-blue-500 transition-colors">
                </div>

                <div class="flex items-center gap-2 mt-2">
                    <!-- El checkbox no necesita "required" porque es un valor booleano -->
                    <input type="checkbox" name="activo" value="1" class="w-5 h-5 accent-blue-600 bg-gray-700 border border-gray-800 rounded focus:ring-blue-500">
                    <label class="text-sm font-medium text-zinc-300">Activo</label>
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