<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\CriterioController;
use App\Http\Controllers\PeriodoEvaluacionController;
use App\Http\Controllers\EvaluacionController;
use App\Http\Controllers\DetalleEvaluacionController;
use App\Http\Controllers\AutoevaluacionController;
use App\Http\Controllers\MetricaController;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/departamentos',
    [DepartamentoController::class, 'index']
);

Route::get('/departamentos/create',
    [DepartamentoController::class, 'create']
);

Route::post('/departamentos',
    [DepartamentoController::class, 'store']
);

Route::get(
    '/departamentos/{id}/edit',
    [DepartamentoController::class, 'edit']
);

Route::put(
    '/departamentos/{id}',
    [DepartamentoController::class, 'update']
);

Route::delete(
    '/departamentos/{id}',
    [DepartamentoController::class, 'destroy']
);

Route::get(
    '/empleados', 
    [EmpleadoController::class, 'index'
]);

Route::get(
    '/empleados/create', 
    [EmpleadoController::class, 'create'
]);

Route::post(
    '/empleados', 
    [EmpleadoController::class, 'store'
]);

Route::get(
    '/empleados/{id}/edit', 
    [EmpleadoController::class, 'edit'
]);

Route::put(
    '/empleados/{id}', 
    [EmpleadoController::class, 'update'
]);

Route::delete(
    '/empleados/{id}', 
    [EmpleadoController::class, 'destroy'
]);

Route::get('/criterios', [CriterioController::class, 'index']);

Route::get('/criterios/create',
    [CriterioController::class, 'create']);

Route::post('/criterios',
    [CriterioController::class, 'store']);

Route::get('/criterios/{id}/edit',
    [CriterioController::class, 'edit']);

Route::put('/criterios/{id}',
    [CriterioController::class, 'update']);

Route::delete('/criterios/{id}',
    [CriterioController::class, 'destroy']);

Route::get('/periodos', [PeriodoEvaluacionController::class,'index']);

Route::get('/periodos/create',
    [PeriodoEvaluacionController::class,'create']);

Route::post('/periodos',
    [PeriodoEvaluacionController::class,'store']);

Route::get('/periodos/{id}/edit',
    [PeriodoEvaluacionController::class,'edit']);

Route::put('/periodos/{id}',
    [PeriodoEvaluacionController::class,'update']);

Route::delete('/periodos/{id}',
    [PeriodoEvaluacionController::class,'destroy']);

Route::get('/evaluaciones',
    [EvaluacionController::class,'index']);

Route::get('/evaluaciones/create',
    [EvaluacionController::class,'create']);

Route::post('/evaluaciones',
    [EvaluacionController::class,'store']);

Route::get('/evaluaciones/{id}/edit',
    [EvaluacionController::class,'edit']);

Route::put('/evaluaciones/{id}',
    [EvaluacionController::class,'update']);

Route::delete('/evaluaciones/{id}',
    [EvaluacionController::class,'destroy']);

Route::get('/detalle-evaluaciones',
    [DetalleEvaluacionController::class,'index']);

Route::get('/detalle-evaluaciones/create',
    [DetalleEvaluacionController::class,'create']);

Route::post('/detalle-evaluaciones',
    [DetalleEvaluacionController::class,'store']);

Route::get('/detalle-evaluaciones/{id}/edit',
    [DetalleEvaluacionController::class,'edit']);

Route::put('/detalle-evaluaciones/{id}',
    [DetalleEvaluacionController::class,'update']);

Route::delete('/detalle-evaluaciones/{id}',
    [DetalleEvaluacionController::class,'destroy']);

Route::get('/autoevaluaciones',
    [AutoevaluacionController::class,'index']);

Route::get('/autoevaluaciones/create',
    [AutoevaluacionController::class,'create']);

Route::post('/autoevaluaciones',
    [AutoevaluacionController::class,'store']);

Route::get('/autoevaluaciones/{id}/edit',
    [AutoevaluacionController::class,'edit']);

Route::put('/autoevaluaciones/{id}',
    [AutoevaluacionController::class,'update']);

Route::delete('/autoevaluaciones/{id}',
    [AutoevaluacionController::class,'destroy']);

Route::get('/metricas',
    [MetricaController::class,'index']);

Route::get('/metricas/create',
    [MetricaController::class,'create']);

Route::post('/metricas',
    [MetricaController::class,'store']);

Route::get('/metricas/{id}/edit',
    [MetricaController::class,'edit']);

Route::put('/metricas/{id}',
    [MetricaController::class,'update']);

Route::delete('/metricas/{id}',
    [MetricaController::class,'destroy']);

