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
                {{ __('Reportes y Estadísticas del Sistema') }}
            </h2>
            <div class="flex gap-2">
                <button class="bg-gray-800 hover:bg-gray-700 text-white text-sm font-semibold px-4 py-2 rounded-md shadow-sm transition">
                    Exportar PDF
                </button>
                <button class="bg-green-600 hover:bg-green-700 text-white text-sm font-semibold px-4 py-2 rounded-md shadow-sm transition">
                    Exportar Excel
                </button>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Filtros de Fecha y Periodo -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-end">
                    <div>
                        <label for="fecha_inicio" class="block text-sm font-medium text-gray-700">Fecha de Inicio</label>
                        <input type="date" id="fecha_inicio" name="fecha_inicio" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                    <div>
                        <label for="fecha_fin" class="block text-sm font-medium text-gray-700">Fecha de Fin</label>
                        <input type="date" id="fecha_fin" name="fecha_fin" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                    <div>
                        <label for="tipo_reporte" class="block text-sm font-medium text-gray-700">Filtrar por Módulo</label>
                        <select id="tipo_reporte" name="tipo_reporte" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            <option value="todos">Todos los módulos</option>
                            <option value="iniciativas">Iniciativas Ciudadanas</option>
                            <option value="organizaciones">Organizaciones Sociales</option>
                            <option value="dictamen">Dictámenes Técnicos</option>
                        </select>
                    </div>
                    <div>
                        <button type="button" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-4 py-2 rounded-md shadow-sm transition">
                            Generar Reporte
                        </button>
                    </div>
                </div>
            </div>

            <!-- Tarjetas de Métricas Principales -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-t-4 border-indigo-500">
                    <p class="text-sm font-medium text-gray-500">Total de Iniciativas</p>
                    <p class="text-3xl font-bold text-gray-800 mt-1">48</p>
                    <span class="text-xs text-green-600 font-semibold mt-2 inline-block">+12% este mes</span>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-t-4 border-green-500">
                    <p class="text-sm font-medium text-gray-500">Organizaciones Activas</p>
                    <p class="text-3xl font-bold text-gray-800 mt-1">32</p>
                    <span class="text-xs text-green-600 font-semibold mt-2 inline-block">+5 nuevas</span>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-t-4 border-amber-500">
                    <p class="text-sm font-medium text-gray-500">DictámenesEmitidos</p>
                    <p class="text-3xl font-bold text-gray-800 mt-1">35</p>
                    <span class="text-xs text-gray-500 font-semibold mt-2 inline-block">Eficiencia del 94%</span>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-t-4 border-blue-500">
                    <p class="text-sm font-medium text-gray-500">Expedientes en Revisión</p>
                    <p class="text-3xl font-bold text-gray-800 mt-1">14</p>
                    <span class="text-xs text-amber-600 font-semibold mt-2 inline-block">Atención requerida</span>
                </div>
            </div>

            <!-- Tabla de Resumen Analítico -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Registro Consolidado de Actividad Gubernamental</h3>
                <div class="overflow-x-auto border border-gray-200 rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 text-left">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Módulo / Sección</th>
                                <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Descripción del Registro</th>
                                <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Responsable</th>
                                <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha</th>
                                <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider text-right">Estado</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">Iniciativas</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Reforestación Comunitaria Zona Sur</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Colectivo Verde</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">02/10/2026</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Registrado</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">Organizaciones</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Fundación de Apoyo Vecinal</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">María Pérez</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">03/10/2026</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Verificado</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">Dictámenes</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Evaluación favorable de iluminación barrial</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Funcionario de Gobierno</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">04/10/2026</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-amber-100 text-amber-800">Emitido</span>
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