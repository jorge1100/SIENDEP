<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
        protected $fillable = [
        'empleado_id',
        'periodo_evaluacion_id',
        'puntaje_total',
        'observaciones',
        'estado'
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    public function periodo()
    {
        return $this->belongsTo(
            PeriodoEvaluacion::class,
            'periodo_evaluacion_id'
        );
    }

    public function detalles()
    {
        return $this->hasMany(
            DetalleEvaluacion::class
        );
    }

}
