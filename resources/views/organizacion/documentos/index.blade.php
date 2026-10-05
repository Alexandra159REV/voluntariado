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
            {{ __('Documentos Disponibles para Revisión') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                @if($documentos->isEmpty())
                    <p class="text-gray-500">No hay proyectos de ley abiertos para revisión en este momento.</p>
                @else
                    <ul class="divide-y divide-gray-200">
                        @foreach($documentos as $doc)
                            <li class="py-3 flex justify-between items-center">
                                <div>
                                    <span class="font-bold text-gray-800">{{ $doc->titulo }}</span>
                                    <p class="text-sm text-gray-600">{{ $doc->descripcion }}</p>
                                </div>
                                <a href="{{ route('organizacion.documentos.show', $doc->id) }}" class="bg-green-600 text-white px-4 py-2 rounded text-sm hover:bg-green-700">Revisar y Observar</a>
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