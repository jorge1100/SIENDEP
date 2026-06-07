@extends('layouts.app')

@section('contenido')

<h1>Detalle Evaluaciones</h1>

<a href="/detalle-evaluaciones/create">
    Nuevo Registro
</a>

<hr>

<table border="1">

<tr>
    <th>ID</th>
    <th>Evaluación</th>
    <th>Criterio</th>
    <th>Calificación</th>
    <th>Comentario</th>
    <th>Acciones</th>
</tr>

@foreach($detalles as $detalle)

<tr>

    <td>{{ $detalle->id }}</td>

    <td>{{ $detalle->evaluacion_id }}</td>

    <td>{{ $detalle->criterio->nombre }}</td>

    <td>{{ $detalle->calificacion }}</td>

    <td>{{ $detalle->comentario }}</td>

    <td>

        <a href="/detalle-evaluaciones/{{ $detalle->id }}/edit">
            Editar
        </a>

        |

        <form
            action="/detalle-evaluaciones/{{ $detalle->id }}"
            method="POST"
            style="display:inline;"
        >

            @csrf
            @method('DELETE')

            <button
                type="submit"
                onclick="return confirm('¿Desea eliminar este registro?')"
            >
                Eliminar
            </button>

        </form>

    </td>

</tr>

@endforeach

</table>

@endsection