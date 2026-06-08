<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Criterio extends Model
{
     protected $fillable = [
        'nombre',
        'descripcion',
        'ponderacion'
    ];

    public function detalles()
    {
        return $this->hasMany(
            DetalleEvaluacion::class
        );
    }
}
