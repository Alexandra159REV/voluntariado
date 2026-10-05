<?php

namespace App\Http\Controllers\Gobierno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrganizacionController extends Controller
{
    public function index()
    {
        return view('gobierno.organizaciones.controlorganizacion');
    }
}