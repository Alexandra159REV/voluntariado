<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Observacion;
use Illuminate\Http\Request;

class ObservacionController extends Controller
{
    public function store(Request $request, Articulo $articulo)
    {
        $request->validate([
            'comentario' => 'required|string|max:2000',
        ]);

        Observacion::create([
            'articulo_id' => $articulo->id,
            'user_id' => auth()->id(),
            'organizacion_id' => auth()->user()->organizacion_id, // Se asigna automáticamente del usuario logueado
            'comentario' => $request->comentario,
            'estado' => 'pendiente',
        ]);

        return redirect()->route('articulos.show', $articulo->id)
                         ->with('success', 'Observación agregada exitosamente.');
    }
}
