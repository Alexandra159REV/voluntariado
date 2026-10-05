<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $rol): Response
    {
        // 1. Validar si el usuario ha iniciado sesión
        if (!auth()->check()) {
            return redirect('/login');
        }

        $user = auth()->user();

        // 2. Validar si el rol del usuario coincide con el requerido en la ruta
        if ($user->rol !== $rol) {
            // Si no coincide, lo redirigimos a su propio dashboard correspondiente
            if ($user->rol === 'gobierno') {
                return redirect()->route('gobierno.dashboard');
            } elseif ($user->rol === 'organizacion') {
                return redirect()->route('organizacion.dashboard');
            }
            
            // Por seguridad, si no tiene un rol válido
            abort(403, 'No tienes autorización para acceder a esta sección.');
        }

        return $next($request);
    }
}