<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Artículo {{ $articulo->numero }}: {{ $articulo->titulo }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Contenido del Artículo -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <span class="text-sm text-indigo-600 font-bold uppercase">Artículo N° {{ $articulo->numero }}</span>
                <h3 class="text-2xl font-bold text-gray-900 mt-1 mb-4">{{ $articulo->titulo }}</h3>
                <div class="prose max-w-none text-gray-700 leading-relaxed whitespace-pre-line border-t pt-4">
                    {{ $articulo->contenido }}
                </div>
            </div>

            <!-- Formulario para Agregar Observación Simple -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h4 class="text-lg font-medium text-gray-900 mb-4">💬 Agregar una observación</h4>
                
                <form action="{{ route('observaciones.store', $articulo->id) }}" method="POST">
                    @csrf
                    <div>
                        <textarea name="comentario" rows="3" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Escribe tu comentario u observación sobre este artículo..." required></textarea>
                    </div>
                    <div class="mt-4 flex justify-end">
                        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 font-semibold text-sm">
                            Guardar Observación
                        </button>
                    </div>
                </form>
            </div>

            <!-- Listado de Observaciones Registradas -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h4 class="text-lg font-medium text-gray-900 mb-4">Observaciones de las Organizaciones ({{ $articulo->observaciones->count() }})</h4>

                @forelse($articulo->observaciones as $obs)
                    <div class="border border-gray-200 rounded-lg p-4 mb-4 bg-gray-50">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-xs font-bold px-2.5 py-0.5 rounded bg-yellow-100 text-yellow-800">
                                🟡 {{ ucfirst($obs->estado) }}
                            </span>
                            <span class="text-xs text-gray-500">{{ $obs->created_at->format('d/m/Y H:i') }}</span>
                        </div>
                        
                        <p class="text-sm font-semibold text-gray-800 mb-1">
                            Organización: {{ $obs->organizacion->nombre ?? 'N/D' }} 
                            <span class="text-gray-500 font-normal">({{ $obs->usuario->name ?? 'Usuario' }})</span>
                        </p>
                        
                        <p class="text-gray-700 bg-white p-3 rounded border border-gray-100 mt-2">
                            "{{ $obs->comentario }}"
                        </p>
                    </div>
                @empty
                    <p class="text-gray-500 text-sm">Aún no hay observaciones registradas para este artículo. ¡Sé el primero en comentar!</p>
                @endforelse
            </div>

        </div>
    </div>
</x-app-layout>
</body>
</html>