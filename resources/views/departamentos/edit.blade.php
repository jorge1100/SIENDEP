@extends('layout')

@section('contenido')

<h1>Editar Departamento</h1>

<form
    method="POST"
    action="/departamentos/{{ $departamento->id }}"
>

    @csrf
    @method('PUT')

    <label>Nombre</label>
    <br>

    <input
        type="text"
        name="nombre"
        value="{{ $departamento->nombre }}"
    >

    <br><br>

    <label>Descripción</label>
    <br>

    <textarea
        name="descripcion"
    >{{ $departamento->descripcion }}</textarea>

    <br><br>

    <button type="submit">
        Actualizar
    </button>

</form>

@endsection