<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    /**
     * Muestra la lista de documentos para el Gobierno (Gestión completa).
     */
    public function indexGobierno()
    {
        // Obtenemos todos los documentos ordenados por fecha de creación
        $documentos = Documento::latest()->get();

        return view('gobierno.documentos.index', compact('documentos'));
    }

    /**
     * Muestra la lista de documentos disponibles para las Organizaciones (Solo lectura / revisión).
     */
    public function indexOrganizacion()
    {
        // Solo mostramos los documentos que estén en revisión o publicados
        $documentos = Documento::where('estado', 'en_revision')->latest()->get();

        return view('organizacion.documentos.index', compact('documentos'));
    }

    /**
     * Muestra el detalle de un documento específico con sus artículos (para ambos roles).
     */
    public function show($id)
    {
        // Buscamos el documento y cargamos sus artículos relacionados
        $documento = Documento::with('articulos')->findOrFail($id);

        $user = auth()->user();

        // Verificamos a qué vista redirigir según el rol del usuario actual
        if ($user->esGobierno()) {
            return view('gobierno.documentos.show', compact('documento'));
        }

        return view('organizacion.documentos.show', compact('documento'));
    }
}