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
            {{ __('Gestión de Documentos de Ley (Gobierno)') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-bold mb-4">Proyectos de Ley Registrados</h3>
                
                @if($documentos->isEmpty())
                    <p class="text-gray-500">No hay documentos registrados todavía.</p>
                @else
                    <ul class="divide-y divide-gray-200">
                        @foreach($documentos as $doc)
                            <li class="py-3 flex justify-between items-center">
                                <div>
                                    <span class="font-bold text-gray-800">{{ $doc->titulo }}</span>
                                    <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded ml-2">Versión {{ $doc->version }}</span>
                                    <p class="text-sm text-gray-600">{{ $doc->descripcion }}</p>
                                </div>
                                <a href="{{ route('gobierno.documentos.show', $doc->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded text-sm hover:bg-blue-700">Ver Artículos</a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
    
</body>
</html>