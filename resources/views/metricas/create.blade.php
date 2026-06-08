@extends('layout')

@section('contenido')


<h1>Nueva Métrica</h1>

<form method="POST" action="/metricas">

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

<label>Tipo</label>
<input type="text" name="tipo">

<br><br>

<label>Valor</label>
<input type="number" step="0.01" name="valor">

<br><br>

<label>Fecha</label>
<input type="date" name="fecha">

<br><br>

<button type="submit">
Guardar
</button>

</form>

@endsection