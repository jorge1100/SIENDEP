@extends('layout')

@section('contenido')

<h1>Editar Criterio</h1>

<form method="POST" action="/criterios/{{ $criterio->id }}">

@csrf
@method('PUT')

<label>Nombre</label>
<br>

<input
type="text"
name="nombre"
value="{{ $criterio->nombre }}"
>

<br><br>

<label>Descripción</label>
<br>

<textarea
name="descripcion"
>{{ $criterio->descripcion }}</textarea>

<br><br>

<label>Ponderación</label>
<br>

<input
type="number"
name="ponderacion"
value="{{ $criterio->ponderacion }}"
>

<br><br>

<button type="submit">
Actualizar
</button>

</form>

<br>

<a href="/criterios">
Volver
</a>

@endsection