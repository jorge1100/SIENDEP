@extends('layouts.app')

@section('contenido')

<h1>Editar Métrica</h1>

<form
    method="POST"
    action="/metricas/{{ $metrica->id }}"
>

    @csrf
    @method('PUT')

    <label>Empleado</label>
    <br>

    <select name="empleado_id">

        @foreach($empleados as $empleado)

        <option
            value="{{ $empleado->id }}"
            {{ $metrica->empleado_id == $empleado->id ? 'selected' : '' }}
        >
            {{ $empleado->nombre }}
            {{ $empleado->apellido }}
        </option>

        @endforeach

    </select>

    <br><br>

    <label>Tipo</label>
    <br>

    <input
        type="text"
        name="tipo"
        value="{{ $metrica->tipo }}"
    >

    <br><br>

    <label>Valor</label>
    <br>

    <input
        type="number"
        step="0.01"
        name="valor"
        value="{{ $metrica->valor }}"
    >

    <br><br>

    <label>Fecha</label>
    <br>

    <input
        type="date"
        name="fecha"
        value="{{ $metrica->fecha }}"
    >

    <br><br>

    <button type="submit">
        Actualizar
    </button>

</form>

@endsection