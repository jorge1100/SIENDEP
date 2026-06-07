@extends('layout')

@section('contenido')

<h1>Autoevaluaciones</h1>

<a href="/autoevaluaciones/create">
Nueva Autoevaluación
</a>

<hr>

<table border="1">

<tr>
<th>ID</th>
<th>Empleado</th>
<th>Periodo</th>
<th>Puntaje</th>
<th>Acciones</th>
</tr>

@foreach($autoevaluaciones as $autoevaluacion)

<tr>

<td>{{ $autoevaluacion->id }}</td>

<td>
{{ $autoevaluacion->empleado->nombre }}
{{ $autoevaluacion->empleado->apellido }}
</td>

<td>
{{ $autoevaluacion->periodo->nombre }}
</td>

<td>
{{ $autoevaluacion->puntaje_total }}
</td>

<td>

<a href="/autoevaluaciones/{{ $autoevaluacion->id }}/edit">
Editar
</a>

</td>

</tr>

@endforeach

</table>

@endsection