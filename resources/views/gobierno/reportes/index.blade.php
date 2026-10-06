<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Fondo principal con un degradado basado en los tonos azules y fucsias */
        body {
            background: linear-gradient(135deg, #1e3a8a 0%, #be185d 100%);
            min-height: 100vh;
            margin: 0;
            color: #1f2937;
        }

        /* Tarjeta o contenedor principal para tablas/secciones */
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
                {{ __('Reportes y Estadísticas del Sistema') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- TARJETAS DE ESTADÍSTICAS / MÉTRICAS CENTRADAS -->
            <div class="flex justify-center mb-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full max-w-5xl">
                    <!-- Tarjeta 1 -->
                    <div class="bg-white overflow-hidden shadow-md sm:rounded-xl p-6 border-l-8 border-blue-600">
                        <div class="text-sm font-bold uppercase tracking-wider text-blue-900">Personas en línea</div>
                        <div class="text-4xl font-extrabold mt-2 text-gray-900">48</div>
                        <div class="text-xs font-semibold mt-1 text-emerald-700">Activas en el sistema</div>
                    </div>
                    <!-- Tarjeta 2 -->
                    <div class="bg-white overflow-hidden shadow-md sm:rounded-xl p-6 border-l-8 border-pink-500">
                        <div class="text-sm font-bold uppercase tracking-wider text-pink-900">Personas registradas</div>
                        <div class="text-4xl font-extrabold mt-2 text-gray-900">28</div>
                        <div class="text-xs font-semibold mt-1 text-pink-600">+5 nuevas</div>
                    </div>
                    <!-- Tarjeta 3 -->
                    <div class="bg-white overflow-hidden shadow-md sm:rounded-xl p-6 border-l-8 border-purple-500">
                        <div class="text-sm font-bold uppercase tracking-wider text-purple-900">Porcentaje de ediciones</div>
                        <div class="text-4xl font-extrabold mt-2 text-gray-900">94%</div>
                        <div class="text-xs font-semibold mt-1 text-gray-500">En el documento</div>
                    </div>
                </div>
            </div>

            <!-- Tabla de Resumen Analítico dentro del contenedor estilizado -->
            <div class="main-container-card p-6 md:p-8">
                <h3 class="text-lg font-bold text-gray-900 mb-6">Registro Consolidado de Actividad Gubernamental</h3>
                <div class="overflow-x-auto border border-pink-200 rounded-xl">
                    <table class="min-w-full divide-y divide-gray-200 text-left">
                        <!-- Encabezado adaptado con tonos a juego -->
                        <thead class="bg-pink-50">
                            <tr>
                                <th class="px-6 py-3 text-xs font-bold text-pink-900 uppercase tracking-wider">Módulo / Sección</th>
                                <th class="px-6 py-3 text-xs font-bold text-pink-900 uppercase tracking-wider">Descripción del registro modificado</th>
                                <th class="px-6 py-3 text-xs font-bold text-pink-900 uppercase tracking-wider">Responsable</th>
                                <th class="px-6 py-3 text-xs font-bold text-pink-900 uppercase tracking-wider">Fecha</th>
                                <th class="px-6 py-3 text-xs font-bold text-pink-900 uppercase tracking-wider text-right">Estado</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">Iniciativas</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Reforestación Comunitaria Zona Sur</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Colectivo Verde</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">02/10/2026</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right">
                                    <span class="px-2.5 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Registrado</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">Organizaciones</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Fundación de Apoyo Vecinal</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">María Pérez</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">03/10/2026</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right">
                                    <span class="px-2.5 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Verificado</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">Dictámenes</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Evaluación favorable de iluminación barrial</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Funcionario de Gobierno</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">04/10/2026</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right">
                                    <span class="px-2.5 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-amber-100 text-amber-800">Emitido</span>
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