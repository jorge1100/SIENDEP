@extends('layout')

@section('contenido')

<h1>Nuevo Período</h1>

<form method="POST" action="/periodos">

@csrf

<label>Nombre</label>
<br>
<input type="text" name="nombre">

<br><br>

<label>Fecha Inicio</label>
<br>
<input type="date" name="fecha_inicio">

<br><br>

<label>Fecha Fin</label>
<br>
<input type="date" name="fecha_fin">

<br><br>

<label>Activo</label>
<input type="checkbox" name="activo" value="1">

<br><br>

<button type="submit">
Guardar
</button>

</form>

@endsection