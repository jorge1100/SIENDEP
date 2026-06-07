@extends('layout')

@section('contenido')

<h1>Métricas</h1>

<a href="/metricas/create">
Nueva Métrica
</a>

<hr>

<table border="1">

<tr>
<th>ID</th>
<th>Empleado</th>
<th>Tipo</th>
<th>Valor</th>
<th>Fecha</th>
<th>Acciones</th>
</tr>

@foreach($metricas as $metrica)

<tr>

<td>{{ $metrica->id }}</td>

<td>
{{ $metrica->empleado->nombre }}
{{ $metrica->empleado->apellido }}
</td>

<td>{{ $metrica->tipo }}</td>

<td>{{ $metrica->valor }}</td>

<td>{{ $metrica->fecha }}</td>

<td>
<a href="/metricas/{{ $metrica->id }}/edit">
Editar
</a>
</td>

</tr>

@endforeach

</table>

@endsection