<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Metrica extends Model
{
    protected $fillable = [
        'empleado_id',
        'tipo',
        'valor',
        'fecha'
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}