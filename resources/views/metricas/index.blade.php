@extends('layout')

@section('contenido')

<h1>Métricas</h1>

<a href="/metricas/create">
    Nueva Métrica
</a>

<hr>

<table border="1">

<tr>
    <th>ID</th>
    <th>Empleado</th>
    <th>Tipo</th>
    <th>Valor</th>
    <th>Fecha</th>
    <th>Acciones</th>
</tr>

@foreach($metricas as $metrica)

<tr>

    <td>{{ $metrica->id }}</td>

    <td>
        {{ $metrica->empleado->nombre }}
        {{ $metrica->empleado->apellido }}
    </td>

    <td>{{ $metrica->tipo }}</td>

    <td>{{ $metrica->valor }}</td>

    <td>{{ $metrica->fecha }}</td>

    <td>

        <a href="/metricas/{{ $metrica->id }}/edit">
            Editar
        </a>

        |

        <form
            action="/metricas/{{ $metrica->id }}"
            method="POST"
            style="display:inline;"
        >

            @csrf
            @method('DELETE')

            <button
                type="submit"
                onclick="return confirm('¿Desea eliminar esta métrica?')"
            >
                Eliminar
            </button>

        </form>

    </td>

</tr>

@endforeach

</table>

@endsection