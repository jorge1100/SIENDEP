@extends('layouts.app')

@section('contenido')

<h1>Editar Evaluación</h1>

<form
    method="POST"
    action="/evaluaciones/{{ $evaluacion->id }}"
>

    @csrf
    @method('PUT')

    <label>Empleado</label>
    <br>

    <select name="empleado_id">

        @foreach($empleados as $empleado)

        <option
            value="{{ $empleado->id }}"
            {{ $evaluacion->empleado_id == $empleado->id ? 'selected' : '' }}
        >
            {{ $empleado->nombre }}
            {{ $empleado->apellido }}
        </option>

        @endforeach

    </select>

    <br><br>

    <label>Período</label>
    <br>

    <select name="periodo_evaluacion_id">

        @foreach($periodos as $periodo)

        <option
            value="{{ $periodo->id }}"
            {{ $evaluacion->periodo_evaluacion_id == $periodo->id ? 'selected' : '' }}
        >
            {{ $periodo->nombre }}
        </option>

        @endforeach

    </select>

    <br><br>

    <label>Puntaje Total</label>
    <br>

    <input
        type="number"
        step="0.01"
        name="puntaje_total"
        value="{{ $evaluacion->puntaje_total }}"
    >

    <br><br>

    <label>Observaciones</label>
    <br>

    <textarea
        name="observaciones"
    >{{ $evaluacion->observaciones }}</textarea>

    <br><br>

    <label>Estado</label>

    <select name="estado">

        <option
            value="borrador"
            {{ $evaluacion->estado == 'borrador' ? 'selected' : '' }}
        >
            Borrador
        </option>

        <option
            value="finalizada"
            {{ $evaluacion->estado == 'finalizada' ? 'selected' : '' }}
        >
            Finalizada
        </option>

    </select>

    <br><br>

    <button type="submit">
        Actualizar
    </button>

</form>

@endsection