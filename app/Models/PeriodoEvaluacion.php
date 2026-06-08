<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeriodoEvaluacion extends Model
{
    protected $table = 'periodo_evaluacions';

    protected $fillable = [
        'nombre',
        'fecha_inicio',
        'fecha_fin',
        'activo'
    ];

    public function evaluaciones()
    {
        return $this->hasMany(
            Evaluacion::class,
            'periodo_evaluacion_id'
        );
    }

    public function autoevaluaciones()
    {
        return $this->hasMany(
            Autoevaluacion::class,
            'periodo_evaluacion_id'
        );
    }
}
