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
            Revisión: {{ $documento->titulo }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <p class="text-gray-600 mb-6">{{ $documento->descripcion }}</p>

                <h3 class="text-lg font-bold mb-4 border-b pb-2">Artículos para Análisis</h3>

                @if($documento->articulos->isEmpty())
                    <p class="text-gray-500">Este documento no contiene artículos publicados.</p>
                @else
                    <div class="space-y-6">
                        @foreach($documento->articulos as $articulo)
                            <div class="border border-gray-200 p-4 rounded-lg bg-gray-50">
                                <h4 class="font-bold text-md text-green-900">Artículo {{ $articulo->numero }}: {{ $articulo->titulo }}</h4>
                                <p class="text-gray-700 mt-2 whitespace-pre-line">{{ $articulo->contenido }}</p>
                                
                                <!-- Espacio reservado para el botón de observaciones que haremos después -->
                                <div class="mt-4 text-right">
                                    <span class="text-xs text-gray-500 italic">Próximamente: Agregar observación a este artículo</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>

</body>
</html>