<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autoevaluacion extends Model
{
    protected $fillable = [
        'empleado_id',
        'periodo_evaluacion_id',
        'comentarios',
        'puntaje_total'
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
}