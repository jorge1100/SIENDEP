@extends('layout')

@section('contenido')

<h1>Períodos de Evaluación</h1>

<a href="/periodos/create">
Nuevo Período
</a>

<hr>

<table border="1">

<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Inicio</th>
    <th>Fin</th>
    <th>Activo</th>
    <th>Acciones</th>
</tr>

@foreach($periodos as $periodo)

<tr>

<td>{{ $periodo->id }}</td>
<td>{{ $periodo->nombre }}</td>
<td>{{ $periodo->fecha_inicio }}</td>
<td>{{ $periodo->fecha_fin }}</td>
<td>{{ $periodo->activo ? 'Sí' : 'No' }}</td>

<td>

<a href="/periodos/{{ $periodo->id }}/edit">
Editar
</a>

<form
action="/periodos/{{ $periodo->id }}"
method="POST"
style="display:inline;"
>

@csrf
@method('DELETE')

<button type="submit">
Eliminar
</button>

</form>

</td>

</tr>

@endforeach

</table>

@endsection