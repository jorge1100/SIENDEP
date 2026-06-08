<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoController;

Route::get('/', function () {
    return view('welcome');
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

use App\Http\Controllers\EmpleadoController;

Route::get('/empleados',[EmpleadoController::class,'index']);
Route::get('/empleados/create',[EmpleadoController::class,'create']);
Route::post('/empleados',[EmpleadoController::class,'store']);

Route::get('/empleados/{id}/edit',
    [EmpleadoController::class,'edit']);

Route::put('/empleados/{id}',
    [EmpleadoController::class,'update']);

Route::delete('/empleados/{id}',
    [EmpleadoController::class,'destroy']);
