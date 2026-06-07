@extends('layouts.app')

@section('contenido')

<h1>Nuevo Criterio</h1>

<form method="POST" action="/criterios">

@csrf

<label>Nombre</label>
<br>
<input type="text" name="nombre">

<br><br>

<label>Descripción</label>
<br>
<textarea name="descripcion"></textarea>

<br><br>

<label>Ponderación</label>
<br>
<input type="number" name="ponderacion">

<br><br>

<button type="submit">
Guardar
</button>

</form>

<br>

<a href="/criterios">
Volver
</a>

@endsection