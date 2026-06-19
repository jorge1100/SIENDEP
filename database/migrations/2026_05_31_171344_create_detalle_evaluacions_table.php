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
        Schema::create('detalle_evaluacions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evaluacion_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('criterio_id')
                ->constrained()
                ->restrictOnDelete();
            $table->decimal('calificacion', 5, 2);
            $table->text('comentario')
                ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_evaluacions');
    }
};
