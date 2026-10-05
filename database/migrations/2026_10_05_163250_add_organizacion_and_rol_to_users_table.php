<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Agregamos el rol (por defecto 'organizacion' o 'revisor')
            $table->string('rol')->default('organizacion')->after('password');
            
            // Agregamos la relación con organizaciones (permite nulos por si es usuario del Gobierno)
            $table->unsignedBigInteger('organizacion_id')->nullable()->after('rol');

            // Llave foránea
            $table->foreign('organizacion_id')
                  ->references('id')
                  ->on('organizaciones')
                  ->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['organizacion_id']);
            $table->dropColumn(['organizacion_id', 'rol']);
        });
    }
};