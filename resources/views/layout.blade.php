<!DOCTYPE html>
<html>

<head>
    <title>SIENDEP</title>

    <style>

        body{
            font-family: Arial;
            margin:20px;
        }

        .menu{
            background:#333;
            padding:10px;
        }

        .menu a{
            color:white;
            text-decoration:none;
            margin-right:15px;
            font-weight:bold;
        }

        .menu a:hover{
            color:yellow;
        }

        table{
            border-collapse:collapse;
            width:100%;
        }

        table, th, td{
            border:1px solid black;
        }

        th, td{
            padding:8px;
        }

    </style>

</head>

<body>

<div class="menu">

    <a href="/">Inicio</a>

    <a href="/departamentos">
        Departamentos
    </a>

    <a href="/empleados">
        Empleados
    </a>

    <a href="/criterios">
        Criterios
    </a>

    <a href="/periodos">
        Períodos
    </a>

    <a href="/evaluaciones">
        Evaluaciones
    </a>

    <a href="/detalle-evaluaciones">
        Detalle Evaluaciones
    </a>

    <a href="/autoevaluaciones">
        Autoevaluaciones
    </a>

    <a href="/metricas">
        Métricas
    </a>

</div>

<hr>

@yield('contenido')

</body>
</html>