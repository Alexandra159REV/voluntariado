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
            {{ $documento->titulo }} (Versión {{ $documento->version }})
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <p class="text-gray-600 mb-6">{{ $documento->descripcion }}</p>

                <h3 class="text-lg font-bold mb-4 border-b pb-2">Artículos del Proyecto de Ley</h3>

                @if($documento->articulos->isEmpty())
                    <p class="text-gray-500">Este documento aún no tiene artículos cargados.</p>
                @else
                    <div class="space-y-6">
                        @foreach($documento->articulos as $articulo)
                            <div class="border border-gray-200 p-4 rounded-lg bg-gray-50">
                                <h4 class="font-bold text-md text-indigo-900">Artículo {{ $articulo->numero }}: {{ $articulo->titulo }}</h4>
                                <p class="text-gray-700 mt-2 whitespace-pre-line">{{ $articulo->contenido }}</p>
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