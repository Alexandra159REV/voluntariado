<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DocumentoController;

use App\Http\Controllers\Gobierno\IniciativaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Gobierno\OrganizacionController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('gobierno.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// --- RUTAS DE PERFIL ---
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// --- PANEL DE GOBIERNO ---
Route::middleware(['auth'])->prefix('gobierno')->name('gobierno.')->group(function () {
    
    Route::get('/dashboard', function () {
        return view('gobierno.dashboard'); 
    })->name('dashboard');

    // Botones y enlaces principales de gobierno conectados a controladores o vistas
    Route::get('/iniciativas', [IniciativaController::class, 'index'])->name('iniciativas.index');
    
    Route::get('/organizaciones', [OrganizacionController::class, 'index'])->name('organizaciones.index');

    Route::get('/dictamen/create', function () {
        return view('gobierno.dictamen.create');
    })->name('dictamen.create');

    Route::get('/reportes', function () {
        return view('gobierno.reportes.index');
    })->name('reportes.index');

});

// --- PANEL DE ORGANIZACIÓN ---
Route::middleware(['auth'])->prefix('organizacion')->name('organizacion.')->group(function () {
    Route::get('/dashboard', function () {
        return view('organizacion.dashboard'); 
    })->name('dashboard');
});

Route::get('/organizaciones', function () {
    return view('gobierno.organizaciones.controlorganizacion');
})->name('organizaciones.index');


Route::get('/emitir-dictamen', [App\Http\Controllers\Gobierno\DictamenController::class, 'create'])->name('dictamen.create');

Route::get('/iniciativas', [IniciativaController::class, 'index'])->name('iniciativas.index');
require __DIR__.'/auth.php';