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
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Control de Organizaciones') }}
            </h2>
            <span class="px-3 py-1 bg-green-100 text-green-700 text-sm font-semibold rounded-full">
                Panel de Gobierno
            </span>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <!-- Cabecera de acciones y buscador -->
                <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
                    <div class="w-full md:w-1/3">
                        <input type="text" placeholder="Buscar organización..." class="w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500">
                    </div>
                    <div>
                        <button class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded-md shadow-sm transition">
                            + Registrar Nueva Organización
                        </button>
                    </div>
                </div>

                <!-- Tabla de organizaciones -->
                <div class="overflow-x-auto border border-gray-200 rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 text-left">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                                <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Representante</th>
                                <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Estado</th>
                                <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider text-right">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <!-- Ejemplo de fila estática (luego la conectarás con tu Base de Datos) -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Fundación Ejemplo S.A.</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">María Pérez</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Activa</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Ver</a>
                                    <a href="#" class="text-red-600 hover:text-red-900">Eliminar</a>
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