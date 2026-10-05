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
        Schema::create('observaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('articulo_id')->constrained('articulos')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('organizacion_id')->constrained('organizaciones')->onDelete('cascade');
            $table->text('comentario');
            $table->string('estado')->default('pendiente'); // pendiente, aceptada, rechazada, etc.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('observaciones');
    }
};