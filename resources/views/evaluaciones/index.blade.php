@extends('layout')

@section('contenido')

<h1>Evaluaciones</h1>

<a href="/evaluaciones/create">
Nueva Evaluación
</a>

<hr>

<table border="1">

<tr>
<th>ID</th>
<th>Empleado</th>
<th>Periodo</th>
<th>Puntaje</th>
<th>Estado</th>
<th>Acciones</th>
</tr>

@foreach($evaluaciones as $evaluacion)

<tr>

<td>{{ $evaluacion->id }}</td>

<td>
{{ $evaluacion->empleado->nombre }}
{{ $evaluacion->empleado->apellido }}
</td>

<td>
{{ $evaluacion->periodo->nombre }}
</td>

<td>
{{ $evaluacion->puntaje_total }}
</td>

<td>
{{ $evaluacion->estado }}
</td>

<td>

<a href="/evaluaciones/{{ $evaluacion->id }}/edit">
Editar
</a>

</td>

</tr>

@endforeach

</table>

@endsection