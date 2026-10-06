<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Fondo principal con degradado basado en los tonos azules y fucsias */
        body {
            background: linear-gradient(135deg, #1e3a8a 0%, #be185d 100%);
            min-height: 100vh;
            margin: 0;
            color: #1f2937;
        }

        /* Tarjeta principal contenedora */
        .main-container-card {
            background: #ffffff;
            border: 2px solid #f472b6;
            border-radius: 20px;
            box-shadow: 0 10px 25px -5px rgba(190, 24, 93, 0.15);
        }
    </style>
</head>
<body>
    <x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Control de Organizaciones') }}
            </h2>
            <span class="px-3 py-1 bg-pink-100 text-pink-700 text-sm font-semibold rounded-full">
                Panel de Gobierno
            </span>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="main-container-card p-6 md:p-8">
                
                <!-- Cabecera de acciones y buscador -->
                <form action="{{ route('gobierno.organizaciones.store') }}" method="POST" class="mb-8">
                    @csrf
                    <!-- El campo de texto donde escribes el nombre -->
                    <input type="text" name="nombre" placeholder="Escribe el nombre de la organización..." class="w-full border-pink-300 focus:border-pink-500 focus:ring-pink-500 rounded-lg shadow-sm mb-4 p-3" required>
                    
                    <!-- El botón de registro con estilo de acento -->
                    <button type="submit" class="bg-gradient-to-r from-blue-600 to-pink-600 hover:from-blue-700 hover:to-pink-700 text-white font-semibold px-6 py-2.5 rounded-lg shadow-md transition transform hover:-translate-y-0.5">
                        + Registrar Nueva Organización
                    </button>
                </form>

                <!-- Tabla de organizaciones -->
                <div class="overflow-x-auto border border-pink-200 rounded-xl">
                    <table class="min-w-full divide-y divide-gray-200 text-left">
                        <thead class="bg-pink-50">
                            <tr>
                                <th class="px-6 py-3 text-xs font-bold text-pink-900 uppercase tracking-wider">Nombre</th>
                                <th class="px-6 py-3 text-xs font-bold text-pink-900 uppercase tracking-wider">Representante</th>
                                <th class="px-6 py-3 text-xs font-bold text-pink-900 uppercase tracking-wider">Estado</th>
                                <th class="px-6 py-3 text-xs font-bold text-pink-900 uppercase tracking-wider text-right">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <!-- Ejemplo de fila estática -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">Fundación Ejemplo S.A.</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">María Pérez</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2.5 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Activa</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-blue-600 hover:text-blue-900 mr-3 font-semibold">Ver</a>
                                    <a href="#" class="text-pink-600 hover:text-pink-900 font-semibold">Eliminar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    </x-app-layout>
</body>
</html>