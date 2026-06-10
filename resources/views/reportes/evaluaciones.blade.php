@extends('layout')

@section('contenido')

<h1>Reporte de Evaluaciones</h1>

<table>

<tr>
<th>Empleado</th>
<th>Periodo</th>
<th>Puntaje</th>
<th>Estado</th>
</tr>

@foreach($evaluaciones as $e)

<tr>

<td>
{{ $e->empleado->nombre }}
{{ $e->empleado->apellido }}
</td>

<td>
{{ $e->periodo->nombre }}
</td>

<td>
{{ $e->puntaje_total }}
</td>

<td>
{{ $e->estado }}
</td>

</tr>

@endforeach

</table>

@endsection