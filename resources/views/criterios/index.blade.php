@extends('layouts.app')

@section('contenido')

<h1>Criterios</h1>

<a href="/criterios/create">
Nuevo Criterio
</a>

<hr>

<table border="1">

<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Descripción</th>
    <th>Ponderación</th>
    <th>Acciones</th>
</tr>

@foreach($criterios as $criterio)

<tr>

<td>{{ $criterio->id }}</td>

<td>{{ $criterio->nombre }}</td>

<td>{{ $criterio->descripcion }}</td>

<td>{{ $criterio->ponderacion }}</td>

<td>

<a href="/criterios/{{ $criterio->id }}/edit">
Editar
</a>

<form
action="/criterios/{{ $criterio->id }}"
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