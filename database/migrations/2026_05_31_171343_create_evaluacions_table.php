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
        Schema::create('evaluacions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empleado_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('periodo_evaluacion_id')
                ->constrained('periodo_evaluacions')
                ->restrictOnDelete();
            $table->decimal('puntaje_total', 5, 2)
                ->default(0);
            $table->text('observaciones')
                ->nullable();
            $table->enum('estado', [
                'borrador',
                'finalizada'
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluacions');
    }
};
