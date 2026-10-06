<?php


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RevisarIniciativaController extends Controller
{
    public function index()
    {
        return view('gobierno.revisariniciativa');
    }
}