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
                {{ __('Emitir Dictamen Técnico') }}
            </h2>
            <span class="px-3 py-1 bg-amber-100 text-amber-800 text-sm font-semibold rounded-full">
                Panel de Gobierno
            </span>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                
                <div class="mb-6 border-b pb-4">
                    <h3 class="text-lg font-medium text-gray-900">Formulario de Resolución y Evaluación</h3>
                    <p class="text-sm text-gray-500">Complete los datos requeridos para emitir el dictamen oficial sobre la iniciativa u organización seleccionada.</p>
                </div>

                <form action="#" method="POST" class="space-y-6">
                    @csrf

                    <!-- Fila 1: Selección del expediente -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="tipo_registro" class="block text-sm font-medium text-gray-700">Tipo de Expediente</label>
                            <select id="tipo_registro" name="tipo_registro" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500">
                                <option value="iniciativa">Iniciativa Comunitaria</option>
                                <option value="organizacion">Organización Social</option>
                            </select>
                        </div>

                        <div>
                            <label for="entidad_id" class="block text-sm font-medium text-gray-700">Seleccionar Elemento</label>
                            <select id="entidad_id" name="entidad_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500">
                                <option value="">-- Seleccione --</option>
                                <option value="1">Iniciativa de Reforestación Urbana</option>
                                <option value="2">Fundación de Apoyo Vecinal</option>
                            </select>
                        </div>
                    </div>

                    <!-- Fila 2: Resultado del dictamen y fecha -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="estado_dictamen" class="block text-sm font-medium text-gray-700">Veredicto / Estado</label>
                            <select id="estado_dictamen" name="estado_dictamen" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500">
                                <option value="aprobado">Aprobado Favorablemente</option>
                                <option value="observado">Aprobado con Observaciones</option>
                                <option value="rechazado">Rechazado</option>
                            </select>
                        </div>

                        <div>
                            <label for="fecha_emision" class="block text-sm font-medium text-gray-700">Fecha de Emisión</label>
                            <input type="date" id="fecha_emision" name="fecha_emision" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500">
                        </div>
                    </div>

                    <!-- Fila 3: Área de texto para observaciones y fundamentos -->
                    <div>
                        <label for="fundamentacion" class="block text-sm font-medium text-gray-700">Fundamentación Legal y Observaciones Técnicas</label>
                        <textarea id="fundamentacion" name="fundamentacion" rows="5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500" placeholder="Redacte los argumentos técnicos y legales del dictamen..."></textarea>
                    </div>

                    <!-- Botones de acción inferior -->
                    <div class="flex items-center justify-end gap-4 pt-4 border-t">
                        <a href="{{ route('gobierno.dashboard') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold px-4 py-2 rounded-md transition">
                            Cancelar
                        </a>
                        <button type="submit" class="bg-amber-600 hover:bg-amber-700 text-white font-semibold px-6 py-2 rounded-md shadow-sm transition">
                            Emitir y Registrar Dictamen
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>
</body>
</html>