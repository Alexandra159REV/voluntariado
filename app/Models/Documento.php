<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'documentos';
    protected $fillable = ['titulo', 'descripcion', 'version', 'estado'];

    // Relación: Un documento tiene muchos artículos
    public function articulos()
    {
        return $this->hasMany(Articulo::class);
    }
}
