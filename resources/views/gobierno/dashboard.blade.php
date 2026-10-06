<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Fondo principal con un degradado basado en los tonos azules y fucsias de la imagen */
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

        /* Tarjetas de acción interactivas con acentos fucsia y azul */
        .dashboard-card-org {
            background: linear-gradient(135deg, #ffffff 0%, #e0e7ff 100%);
            border: 2px solid #3b82f6;
            border-radius: 16px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px -1px rgba(59, 130, 246, 0.1);
        }
        .dashboard-card-org:hover {
            transform: translateY(-4px);
            border-color: #1d4ed8;
            box-shadow: 0 12px 20px -3px rgba(59, 130, 246, 0.25);
        }

        .dashboard-card-rep {
            background: linear-gradient(135deg, #ffffff 0%, #fce7f3 100%);
            border: 2px solid #f472b6;
            border-radius: 16px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px -1px rgba(244, 114, 182, 0.2);
        }
        .dashboard-card-rep:hover {
            transform: translateY(-4px);
            border-color: #be185d;
            box-shadow: 0 12px 20px -3px rgba(190, 24, 93, 0.25);
        }

        .card-icon-wrapper {
            width: 64px;
            height: 64px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease;
        }
        .dashboard-card-org:hover .card-icon-wrapper,
        .dashboard-card-rep:hover .card-icon-wrapper {
            transform: scale(1.08);
        }
    </style>
</head>

<body>

  <x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
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

            <!-- BOTONES DE GESTIÓN PRINCIPALES -->
            <div class="main-container-card p-8 mb-8 max-w-5xl mx-auto">
                <h3 class="text-xl font-bold mb-6 text-center md:text-left text-gray-900">Acciones de Gestión Rápida</h3>
                
                <!-- Contenedor centrado y adaptado para 2 botones grandes -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-4xl mx-auto">
                    
                    <!-- Botón 1: Control de Organizaciones -->
                    <a href="{{ route('gobierno.organizaciones.index') }}" class="dashboard-card-org flex flex-col items-center justify-center p-8 transition text-decoration-none">
                        <div class="card-icon-wrapper mb-4 bg-blue-600 text-white">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                        <span class="font-bold text-lg text-center text-gray-900">Control de Organizaciones</span>
                    </a>

                    <!-- Botón 2: Reportes de Estado -->
                    <a href="{{ route('gobierno.reportes.index') }}" class="dashboard-card-rep flex flex-col items-center justify-center p-8 transition text-decoration-none">
                        <div class="card-icon-wrapper mb-4 bg-pink-600 text-white">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <span class="font-bold text-lg text-center text-gray-900">Reportes de Estado</span>
                    </a>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>

</body>
</html>