@extends('layouts.app')

@section('contenido')

<h1>Editar Autoevaluación</h1>

<form
    method="POST"
    action="/autoevaluaciones/{{ $autoevaluacion->id }}"
>

    @csrf
    @method('PUT')

    <label>Empleado</label>
    <br>

    <select name="empleado_id">

        @foreach($empleados as $empleado)

        <option
            value="{{ $empleado->id }}"
            {{ $autoevaluacion->empleado_id == $empleado->id ? 'selected' : '' }}
        >
            {{ $empleado->nombre }}
            {{ $empleado->apellido }}
        </option>

        @endforeach

    </select>

    <br><br>

    <label>Periodo</label>
    <br>

    <select name="periodo_evaluacion_id">

        @foreach($periodos as $periodo)

        <option
            value="{{ $periodo->id }}"
            {{ $autoevaluacion->periodo_evaluacion_id == $periodo->id ? 'selected' : '' }}
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
        value="{{ $autoevaluacion->puntaje_total }}"
    >

    <br><br>

    <label>Comentarios</label>
    <br>

    <textarea
        name="comentarios"
    >{{ $autoevaluacion->comentarios }}</textarea>

    <br><br>

    <button type="submit">
        Actualizar
    </button>

</form>

@endsection