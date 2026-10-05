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
        Schema::create('respuestas', function (Blueprint $table) {
            $table->id();
            // Relación con la observación a la que se está respondiendo
            $table->foreignId('observacion_id')->constrained('observaciones')->onDelete('cascade');
            
            // Relación con el usuario del gobierno que emite la respuesta
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            
            // Contenido de la respuesta del gobierno
            $table->text('respuesta');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respuestas');
    }
};