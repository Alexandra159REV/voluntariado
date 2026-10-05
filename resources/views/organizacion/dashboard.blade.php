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
            {{ __('Panel de Participación - Organización') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Bienvenido a la plataforma de revisión ciudadana</h3>
                    <p class="mb-4">Aquí podrás consultar los artículos del Proyecto de Ley Integral del Voluntariado y enviar tus observaciones u opiniones.</p>
                    
                    <div class="mt-6 bg-gray-50 border border-gray-200 p-4 rounded-lg">
                        <h4 class="font-bold text-gray-700 mb-2">Documentos disponibles para revisión:</h4>
                        <p class="text-sm text-gray-600">No hay documentos publicados activamente todavía, o puedes consultar el borrador actual.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

</body>
</html>