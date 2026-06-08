@extends('layout')

@section('contenido')

<h1>Editar Período</h1>

<form method="POST" action="/periodos/{{ $periodo->id }}">

@csrf
@method('PUT')

<input
type="text"
name="nombre"
value="{{ $periodo->nombre }}"
>

<br><br>

<input
type="date"
name="fecha_inicio"
value="{{ $periodo->fecha_inicio }}"
>

<br><br>

<input
type="date"
name="fecha_fin"
value="{{ $periodo->fecha_fin }}"
>

<br><br>

<input
type="checkbox"
name="activo"
value="1"
{{ $periodo->activo ? 'checked' : '' }}
>

Activo

<br><br>

<button type="submit">
Actualizar
</button>

</form>

@endsection