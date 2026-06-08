<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleEvaluacion extends Model
{
        protected $fillable = [
        'evaluacion_id',
        'criterio_id',
        'calificacion',
        'comentario'
    ];

    public function evaluacion()
    {
        return $this->belongsTo(Evaluacion::class);
    }

    public function criterio()
    {
        return $this->belongsTo(Criterio::class);
    }
}
