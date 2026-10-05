<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Organizacion;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Crear una Organización de prueba
        $organizacion = Organizacion::create([
            'nombre' => 'Fundación de Apoyo Social',
            'descripcion' => 'Organización dedicada a promover el voluntariado y la participación ciudadana.',
        ]);

        // 2. Crear el usuario de Gobierno (No pertenece a una organización, rol = gobierno)
        User::create([
            'name' => 'Funcionario de Gobierno',
            'email' => 'gobierno@voluntariado.gob',
            'password' => Hash::make('password123'), // Contraseña segura y encriptada
            'rol' => 'gobierno',
            'organizacion_id' => null,
        ]);

        // 3. Crear el usuario de Organización (Vinculado a la fundación creada arriba, rol = organizacion)
        User::create([
            'name' => 'Representante de Fundación',
            'email' => 'organizacion@fundacion.org',
            'password' => Hash::make('password123'), // Contraseña segura y encriptada
            'rol' => 'organizacion',
            'organizacion_id' => $organizacion->id,
        ]);
    }
}