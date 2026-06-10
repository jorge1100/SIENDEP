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

        .dropdown{
            display:inline-block;
            position:relative;
        }

        .dropbtn{
            background:#333;
            color:white;
            border:none;
            font-weight:bold;
            cursor:pointer;
            font-size:16px;
            margin-right:15px;
        }

        .dropbtn:hover{
            color:yellow;
        }

        .dropdown-content{
            display:none;
            position:absolute;
            background:white;
            min-width:220px;
            box-shadow:0px 8px 16px rgba(0,0,0,0.2);
            z-index:1;
        }

        .dropdown-content a{
            color:black;
            padding:10px;
            display:block;
            text-decoration:none;
        }

        .dropdown-content a:hover{
            background:#f1f1f1;
            color:black;
        }

        .dropdown:hover .dropdown-content{
            display:block;
        }

    </style>

</head>

<body>

<div class="menu">

    <a href="/">Inicio</a>

    <a href="/departamentos">Departamentos</a>

    <a href="/empleados">Empleados</a>

    <a href="/criterios">Criterios</a>

    <a href="/periodos">Períodos</a>

    <a href="/evaluaciones">Evaluaciones</a>

    <a href="/detalle-evaluaciones">
        Detalle Evaluaciones
    </a>

    <a href="/autoevaluaciones">
        Autoevaluaciones
    </a>

    <a href="/metricas">
        Métricas
    </a>

    <div class="dropdown">

        <button class="dropbtn">
            Reportes
        </button>

        <div class="dropdown-content">

            <a href="/reportes/evaluaciones">
                Reporte evaluaciones
            </a>

            <a href="/reportes/ranking">
                Ranking empleados
            </a>

            <a href="/reportes/promedio">
                Promedio empleados
            </a>

        </div>

    </div>

</div>

<hr>

@yield('contenido')

</body>

</html>