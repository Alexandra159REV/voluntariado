<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'rol',
        'organizacion_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Relación: Un usuario pertenece a una organización
    public function organizacion()

    {
        return $this->belongsTo(Organizacion::class, 'organizacion_id');
    }

    public function observaciones()
    {
        return $this->hasMany(Observacion::class, 'user_id');
    }


    // Método para verificar si es del gobierno
    public function esGobierno()
    {
        return $this->rol === 'gobierno';
    }

    // Método útil por si quieres verificar si es de organización rápidamente
    public function esOrganizacion()
    {
        return $this->rol === 'organizacion';
    }

   
    
}