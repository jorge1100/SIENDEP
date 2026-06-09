@extends('layouts.app')

@section('content')

    <div class="max-w-2xl mx-auto">
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-white">Nueva Evaluación</h1>
        </div>

        <div class="bg-zinc-800 p-8 rounded-lg shadow-lg border border-zinc-600">
            <form method="POST" action="/evaluaciones" class="flex flex-col gap-5">
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
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Período</label>
                    <select name="periodo_evaluacion_id" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                        @foreach($periodos as $periodo)
                            <option value="{{ $periodo->id }}">
                                {{ $periodo->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Puntaje</label>
                    <input type="number" step="0.01" name="puntaje_total" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Observaciones</label>
                    <textarea name="observaciones" rows="4" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors"></textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">Estado</label>
                    <select name="estado" class="w-full bg-zinc-900 border border-zinc-600 rounded p-3 text-white focus:outline-none focus:border-blue-500 transition-colors">
                        <option value="borrador">Borrador</option>
                        <option value="finalizada">Finalizada</option>
                    </select>
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