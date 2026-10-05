<?php

namespace App\Http\Controllers\Gobierno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IniciativaController extends Controller
{
    public function index()
    {
        return view('gobierno.iniciativas.index');
    }
}