<?php

namespace App\Http\Controllers\Gobierno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Aquí después traeremos contadores de proyectos, observaciones, etc.
        return view('gobierno.dashboard');
    }
}