@extends('layouts.app')

@section('contenido')

<h1>Nueva Autoevaluación</h1>

<form method="POST" action="/autoevaluaciones">

@csrf

<label>Empleado</label>

<select name="empleado_id">

@foreach($empleados as $empleado)

<option value="{{ $empleado->id }}">
{{ $empleado->nombre }}
{{ $empleado->apellido }}
</option>

@endforeach

</select>

<br><br>

<label>Período</label>

<select name="periodo_evaluacion_id">

@foreach($periodos as $periodo)

<option value="{{ $periodo->id }}">
{{ $periodo->nombre }}
</option>

@endforeach

</select>

<br><br>

<label>Comentarios</label>

<textarea name="comentarios"></textarea>

<br><br>

<label>Puntaje Total</label>

<input
type="number"
step="0.01"
name="puntaje_total"
>

<br><br>

<button type="submit">
Guardar
</button>

</form>

@endsection