<?php

namespace App\Http\Controllers\Organizacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Aquí después mostraremos los documentos disponibles para la organización
        return view('organizacion.dashboard');
    }
}