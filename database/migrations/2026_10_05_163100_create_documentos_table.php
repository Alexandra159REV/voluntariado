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
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion')->nullable();
            $table->integer('version')->default(1);
            $table->string('estado')->default('en_revision'); // en_revision, aprobado, etc.
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('documentos');
    }
};