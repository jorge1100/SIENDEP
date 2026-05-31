<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('autoevaluacions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empleado_id')
                ->constrained();
            $table->foreignId('periodo_evaluacion_id')
                ->constrained('periodo_evaluacions');
            $table->text('comentarios');
            $table->decimal('puntaje_total', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autoevaluacions');
    }
};
