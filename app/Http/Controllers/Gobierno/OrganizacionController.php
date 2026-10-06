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

    public function create()
    {
        return view('gobierno.organizaciones.create'); // La vista con el formulario de registro
    }

    public function store(Request $request)
    {
        // Validar y guardar los datos en la base de datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'representante' => 'required|string|max:255',
        ]);

        // Lógica de guardado en la BD (ej. Organizacion::create($request->all());)

        return redirect()->route('gobierno.organizaciones.index')->with('success', 'Organización registrada con éxito.');
    }

    
}