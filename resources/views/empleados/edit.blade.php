@extends('layouts.app')

@section('contenido')

<h1>Editar Empleado</h1>

<form method="POST" action="/empleados/{{ $empleado->id }}">

@csrf
@method('PUT')

<input type="text" name="dni" value="{{ $empleado->dni }}"><br><br>

<input type="text" name="nombre" value="{{ $empleado->nombre }}"><br><br>

<input type="text" name="apellido" value="{{ $empleado->apellido }}"><br><br>

<input type="text" name="telefono" value="{{ $empleado->telefono }}"><br><br>

<input type="text" name="direccion" value="{{ $empleado->direccion }}"><br><br>

<input type="text" name="cargo" value="{{ $empleado->cargo }}"><br><br>

<input type="date" name="fecha_ingreso" value="{{ $empleado->fecha_ingreso }}"><br><br>

<select name="departamento_id">

@foreach($departamentos as $departamento)

<option
value="{{ $departamento->id }}"
{{ $empleado->departamento_id == $departamento->id ? 'selected' : '' }}
>
{{ $departamento->nombre }}
</option>

@endforeach

</select>

<br><br>

<button type="submit">
Actualizar
</button>

</form>

@endsection