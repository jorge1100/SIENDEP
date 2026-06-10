@extends('layout')

@section('contenido')

<h1>Promedio por Empleado</h1>

<table>

<tr>
<th>Empleado</th>
<th>Promedio</th>
</tr>

@foreach($promedios as $p)

<tr>

<td>
{{ $p->nombre }}
{{ $p->apellido }}
</td>

<td>
{{ number_format($p->promedio,2) }}
</td>

</tr>

@endforeach

</table>

@endsection