<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Observacion extends Model
{
    protected $table = 'observaciones';
    protected $fillable = ['articulo_id', 'user_id', 'organizacion_id', 'comentario', 'estado'];

    public function articulo()
    {
        return $this->belongsTo(Articulo::class);
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function organizacion()
    {
        return $this->belongsTo(Organizacion::class);
    }

    public function respuestas()
    {
        return $this->hasMany(Respuesta::class);
    }
}
