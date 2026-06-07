@extends('layout')

@section('contenido')

<h1>Nuevo Detalle de Evaluación</h1>

<form method="POST" action="/detalle-evaluaciones">

@csrf

<label>Evaluación</label>

<select name="evaluacion_id">

@foreach($evaluaciones as $evaluacion)

<option value="{{ $evaluacion->id }}">
Evaluación #{{ $evaluacion->id }}
</option>

@endforeach

</select>

<br><br>

<label>Criterio</label>

<select name="criterio_id">

@foreach($criterios as $criterio)

<option value="{{ $criterio->id }}">
{{ $criterio->nombre }}
</option>

@endforeach

</select>

<br><br>

<label>Calificación</label>

<input
type="number"
step="0.01"
name="calificacion"
>

<br><br>

<label>Comentario</label>

<textarea name="comentario"></textarea>

<br><br>

<button type="submit">
Guardar
</button>

</form>

@endsection