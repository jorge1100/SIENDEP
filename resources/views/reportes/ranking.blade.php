@extends('layout')

@section('contenido')

<h1>Ranking de Empleados</h1>

<table>

<tr>
<th>Puesto</th>
<th>Empleado</th>
<th>Puntaje</th>
</tr>

@foreach($ranking as $r)

<tr>

<td>{{ $loop->iteration }}</td>

<td>
{{ $r->empleado->nombre }}
{{ $r->empleado->apellido }}
</td>

<td>{{ $r->puntaje_total }}</td>

</tr>

@endforeach

</table>

@endsection