@extends('layout')

@section('contenido')

<h1>Empleados</h1>

<a href="/empleados/create">
Nuevo Empleado
</a>

<hr>

<table border="1">

<tr>

    <th>ID</th>
    <th>DNI</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Cargo</th>
    <th>Departamento</th>
    <th>Acciones</th>

</tr>

@foreach($empleados as $empleado)

<tr>

<td>{{ $empleado->id }}</td>
<td>{{ $empleado->dni }}</td>
<td>{{ $empleado->nombre }}</td>
<td>{{ $empleado->apellido }}</td>
<td>{{ $empleado->cargo }}</td>
<td>{{ $empleado->departamento->nombre }}</td>

<td>

<a href="/empleados/{{ $empleado->id }}/edit">
Editar
</a>

<form
action="/empleados/{{ $empleado->id }}"
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

