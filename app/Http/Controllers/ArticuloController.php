<?php

namespace App\Http\Controllers;

use App\Models\Articulo;

class ArticuloController extends Controller
{
    public function show(Articulo $articulo)
    {
        // Cargamos el artículo junto con sus observaciones, el usuario que comentó y su organización
        $articulo->load(['observaciones.usuario', 'observaciones.organizacion', 'observaciones.respuestas.usuario']);

        return view('articulos.show', compact('articulo'));
    }
}
