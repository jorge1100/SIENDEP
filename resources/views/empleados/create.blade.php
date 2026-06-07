@extends('layout')

@section('contenido')

<h1>Nuevo Empleado</h1>

<form method="POST" action="/empleados">

@csrf

<input type="text" name="dni" placeholder="DNI"><br><br>

<input type="text" name="nombre" placeholder="Nombre"><br><br>

<input type="text" name="apellido" placeholder="Apellido"><br><br>

<input type="text" name="telefono" placeholder="Teléfono"><br><br>

<input type="text" name="direccion" placeholder="Dirección"><br><br>

<input type="text" name="cargo" placeholder="Cargo"><br><br>

<input type="date" name="fecha_ingreso"><br><br>

<select name="departamento_id">

@foreach($departamentos as $departamento)

<option value="{{ $departamento->id }}">
    {{ $departamento->nombre }}
</option>

@endforeach

</select>

<br><br>

<button type="submit">
Guardar
</button>

</form>

@endsection