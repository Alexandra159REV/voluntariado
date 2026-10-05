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
                {{ __('Emisión y Gestión de Dictámenes Técnicos') }}
            </h2>
            <span class="px-3 py-1 bg-amber-100 text-amber-800 text-sm font-semibold rounded-full">
                Módulo de Gobierno
            </span>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Tarjetas de Estadísticas Rápidas -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-green-500">
                    <p class="text-sm font-medium text-gray-500">Dictámenes Aprobados</p>
                    <p class="text-3xl font-bold text-gray-800 mt-1">24</p>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-yellow-500">
                    <p class="text-sm font-medium text-gray-500">Con Observaciones</p>
                    <p class="text-3xl font-bold text-gray-800 mt-1">8</p>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-red-500">
                    <p class="text-sm font-medium text-gray-500">Rechazados</p>
                    <p class="text-3xl font-bold text-gray-800 mt-1">3</p>
                </div>
            </div>

            <!-- Formulario Principal Extendido -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <div class="mb-6 border-b pb-4">
                    <h3 class="text-lg font-medium text-gray-900">Nuevo Dictamen Técnico Oficial</h3>
                    <p class="text-sm text-gray-500">Redacte y asigne un veredicto definitivo para las iniciativas ciudadanas u organizaciones registradas.</p>
                </div>

                <form action="#" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label for="tipo_expediente" class="block text-sm font-medium text-gray-700">Tipo de Expediente</label>
                            <select id="tipo_expediente" name="tipo_expediente" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500">
                                <option value="iniciativa">Iniciativa Comunitaria</option>
                                <option value="organizacion">Organización Social</option>
                            </select>
                        </div>

                        <div class="md:col-span-2">
                            <label for="entidad_id" class="block text-sm font-medium text-gray-700">Seleccionar Iniciativa u Organización a Evaluar</label>
                            <select id="entidad_id" name="entidad_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500">
                                <option value="">-- Seleccione el proyecto o entidad --</option>
                                <option value="1">Reforestación Comunitaria Zona Sur (Iniciativa)</option>
                                <option value="2">Fundación de Apoyo Vecinal (Organización)</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label for="veredicto" class="block text-sm font-medium text-gray-700">Veredicto Final</label>
                            <select id="veredicto" name="veredicto" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500">
                                <option value="aprobado">Aprobado Favorablemente</option>
                                <option value="observado">Aprobado con Observaciones</option>
                                <option value="rechazado">Rechazado</option>
                            </select>
                        </div>

                        <div>
                            <label for="responsable" class="block text-sm font-medium text-gray-700">Funcionario Evaluador</label>
                            <input type="text" id="responsable" name="responsable" value="Funcionario de Gobierno" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500 bg-gray-50" readonly>
                        </div>

                        <div>
                            <label for="fecha_emision" class="block text-sm font-medium text-gray-700">Fecha del Dictamen</label>
                            <input type="date" id="fecha_emision" name="fecha_emision" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500">
                        </div>
                    </div>

                    <div>
                        <label for="fundamentacion" class="block text-sm font-medium text-gray-700">Fundamentación Legal, Técnica y Observaciones</label>
                        <textarea id="fundamentacion" name="fundamentacion" rows="5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500" placeholder="Detalle los argumentos técnicos, cumplimiento de normativas y observaciones específicas..."></textarea>
                    </div>

                    <div class="flex items-center justify-end gap-4 pt-4 border-t">
                        <button type="reset" class="bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold px-4 py-2 rounded-md transition">
                            Limpiar Formulario
                        </button>
                        <button type="submit" class="bg-amber-600 hover:bg-amber-700 text-white font-semibold px-6 py-2 rounded-md shadow-sm transition">
                            Emitir y Registrar Dictamen Oficial
                        </button>
                    </div>
                </form>
            </div>

            <!-- Historial Reciente de Dictámenes -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Dictámenes Emitidos Recientemente</h3>
                <div class="overflow-x-auto border border-gray-200 rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 text-left">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Entidad / Iniciativa</th>
                                <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Veredicto</th>
                                <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha</th>
                                <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider text-right">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Proyecto de Iluminación Barrial</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Aprobado</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">03/10/2026</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Ver Reporte PDF</a>
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