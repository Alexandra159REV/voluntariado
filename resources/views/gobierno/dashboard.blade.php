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
                {{ __('Panel de Control - Funcionario de Gobierno') }}
            </h2>
            <span class="px-3 py-1 text-xs font-semibold text-blue-800 bg-blue-100 rounded-full">
                Rol: Gobierno / Legislativo
            </span>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- TARJETAS DE ESTADÍSTICAS / MÉTRICAS -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <!-- Tarjeta 1 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-indigo-500">
                    <div class="text-gray-500 text-sm font-medium uppercase">Proyectos en Revisión</div>
                    <div class="text-3xl font-bold text-gray-800 mt-2">12</div>
                    <div class="text-xs text-green-600 mt-1">↑ 2 nuevos hoy</div>
                </div>
                <!-- Tarjeta 2 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-green-500">
                    <div class="text-gray-500 text-sm font-medium uppercase">Organizaciones Registradas</div>
                    <div class="text-3xl font-bold text-gray-800 mt-2">28</div>
                    <div class="text-xs text-gray-500 mt-1">Activas en el sistema</div>
                </div>
                <!-- Tarjeta 3 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-yellow-500">
                    <div class="text-gray-500 text-sm font-medium uppercase">Dictámenes Emitidos</div>
                    <div class="text-3xl font-bold text-gray-800 mt-2">45</div>
                    <div class="text-xs text-blue-600 mt-1">Histórico total</div>
                </div>
            </div>

            <!-- BOTONES DE GESTIÓN PRINCIPALES -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 mb-8">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Acciones de Gestión Rápida</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                    
                    <!-- Botón 1: Revisar Iniciativas -->
                    <a href="{{ route('gobierno.iniciativas.index') }}" class="flex flex-col items-center justify-center p-4 bg-indigo-50 hover:bg-indigo-100 border border-indigo-200 rounded-lg text-indigo-700 transition shadow-sm hover:shadow">
                        <svg class="w-8 h-8 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        <span class="font-semibold text-sm text-center">Revisar Iniciativas</span>
                    </a>

                    <!-- Botón 2: Control de Organizaciones -->
                    <a href="{{ route('gobierno.organizaciones.index') }}" class="flex flex-col items-center justify-center p-4 bg-green-50 hover:bg-green-100 border border-green-200 rounded-lg text-green-700 transition shadow-sm hover:shadow">
                        <svg class="w-8 h-8 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        <span class="font-semibold text-sm text-center">Control de Organizaciones</span>
                    </a>

                    <!-- Botón 3: Emitir Dictamen -->
                    <a href="{{ route('gobierno.dictamen.create') }}" class="flex flex-col items-center justify-center p-4 bg-yellow-50 hover:bg-yellow-100 border border-yellow-200 rounded-lg text-yellow-800 transition shadow-sm hover:shadow">
                        <svg class="w-8 h-8 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        <span class="font-semibold text-sm text-center">Emitir Dictamen</span>
                    </a>

                    <!-- Botón 4: Reportes de Estado -->
                    <a href="{{ route('gobierno.reportes.index') }}" class="flex flex-col items-center justify-center p-4 bg-purple-50 hover:bg-purple-100 border border-purple-200 rounded-lg text-purple-700 transition shadow-sm hover:shadow">
                        <svg class="w-8 h-8 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        <span class="font-semibold text-sm text-center">Reportes de Estado</span>
                    </a>

                </div>
            </div>

            <!-- TABLA RECIENTE O SECCIÓN DE TRABAJO -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Últimas Propuestas Recibidas</h3>
                <div class="border-t border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Título de Propuesta</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Organización</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Estado</th>
                                <th class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Acción</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 text-sm">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">Proyecto de Ley de Fomento al Voluntariado Juvenil</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-500">Fundación Manos Unidas</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">En Revisión</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Evaluar</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">Modificación al Marco de Alianzas Estratégicas</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-500">Asociación Civil Pro-Desarrollo</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Aprobado</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Ver Dictamen</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>