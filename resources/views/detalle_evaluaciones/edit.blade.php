@extends('layout')

@section('contenido')

<h1>Editar Detalle de Evaluación</h1>

<form
    method="POST"
    action="/detalle-evaluaciones/{{ $detalle->id }}"
>

    @csrf
    @method('PUT')

    <label>Evaluación</label>
    <br>

    <select name="evaluacion_id">

        @foreach($evaluaciones as $evaluacion)

        <option
            value="{{ $evaluacion->id }}"
            {{ $detalle->evaluacion_id == $evaluacion->id ? 'selected' : '' }}
        >
            Evaluación #{{ $evaluacion->id }}
        </option>

        @endforeach

    </select>

    <br><br>

    <label>Criterio</label>
    <br>

    <select name="criterio_id">

        @foreach($criterios as $criterio)

        <option
            value="{{ $criterio->id }}"
            {{ $detalle->criterio_id == $criterio->id ? 'selected' : '' }}
        >
            {{ $criterio->nombre }}
        </option>

        @endforeach

    </select>

    <br><br>

    <label>Calificación</label>
    <br>

    <input
        type="number"
        step="0.01"
        name="calificacion"
        value="{{ $detalle->calificacion }}"
    >

    <br><br>

    <label>Comentario</label>
    <br>

    <textarea
        name="comentario"
    >{{ $detalle->comentario }}</textarea>

    <br><br>

    <button type="submit">
        Actualizar
    </button>

</form>

@endsection