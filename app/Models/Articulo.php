<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulos';
    protected $fillable = ['documento_id', 'numero', 'titulo', 'contenido'];

    // Relación: Pertenece a un documento
    public function documento()
    {
        return $this->belongsTo(Documento::class);
    }

    // Relación: Tiene muchas observaciones
    public function observaciones()
    {
        return $this->hasMany(Observacion::class);
    }
}
