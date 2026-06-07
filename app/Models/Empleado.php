<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
     protected $fillable = [
        'user_id',
        'departamento_id',
        'dni',
        'nombre',
        'apellido',
        'telefono',
        'direccion',
        'cargo',
        'fecha_ingreso',
        'activo'
    ];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    public function evaluaciones()
    {
        return $this->hasMany(Evaluacion::class);
    }

    public function autoevaluaciones()
    {
            return $this->hasMany(
            Autoevaluacion::class
        );
    }

    public function metricas()
    {
        return $this->hasMany(Metrica::class);
    }
}
