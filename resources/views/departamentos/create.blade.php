<h1>Nuevo Departamento</h1>

<form method="POST" action="/departamentos">

    @csrf

    <label>Nombre</label>
    <br>

    <input type="text" name="nombre">

    <br><br>

    <label>Descripción</label>
    <br>

    <textarea name="descripcion"></textarea>

    <br><br>

    <button type="submit">
        Guardar
    </button>

</form>