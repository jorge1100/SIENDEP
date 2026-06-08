@extends('layout')

@section('contenido')

<h1>Departamentos</h1>

<a href="/departamentos/create">
    Nuevo Departamento
</a>

<br><br>

<table>

    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Acciones</th>
    </tr>

    @foreach($departamentos as $departamento)

    <tr>

        <td>{{ $departamento->id }}</td>

        <td>{{ $departamento->nombre }}</td>

        <td>{{ $departamento->descripcion }}</td>

        <td>

            <a href="/departamentos/{{ $departamento->id }}/edit">
                Editar
            </a>

            |

            <form
                action="/departamentos/{{ $departamento->id }}"
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