@extends('layouts.app')

@section('contenido')

<h1>Nueva Evaluación</h1>

<form method="POST" action="/evaluaciones">

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

<label>Puntaje</label>

<input
type="number"
step="0.01"
name="puntaje_total"
>

<br><br>

<label>Observaciones</label>

<textarea name="observaciones"></textarea>

<br><br>

<label>Estado</label>

<select name="estado">

<option value="borrador">
Borrador
</option>

<option value="finalizada">
Finalizada
</option>

</select>

<br><br>

<button type="submit">
Guardar
</button>

</form>

@endsection