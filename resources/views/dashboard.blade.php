@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold text-gray-800 mb-8">Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
        <!-- Total Tareas -->
        <div class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-xl transition">
            <h3 class="text-lg font-semibold text-gray-600">Total Tareas</h3>
            <p class="text-3xl font-bold mt-2 text-gray-900">{{ $totalTareas }}</p>
        </div>

        <!-- Tareas Pendientes -->
        <div class="bg-yellow-100 shadow-md rounded-lg p-6 text-center hover:shadow-xl transition">
            <h3 class="text-lg font-semibold text-yellow-700">Pendientes</h3>
            <p class="text-3xl font-bold mt-2 text-yellow-900">{{ $tareasPendientes }}</p>
        </div>

        <!-- Tareas en Progreso -->
        <div class="bg-blue-100 shadow-md rounded-lg p-6 text-center hover:shadow-xl transition">
            <h3 class="text-lg font-semibold text-blue-700">En Progreso</h3>
            <p class="text-3xl font-bold mt-2 text-blue-900">{{ $tareasEnProgreso }}</p>
        </div>

        <!-- Tareas Completadas -->
        <div class="bg-green-100 shadow-md rounded-lg p-6 text-center hover:shadow-xl transition">
            <h3 class="text-lg font-semibold text-green-700">Completadas</h3>
            <p class="text-3xl font-bold mt-2 text-green-900">{{ $tareasCompletadas }}</p>
        </div>
    </div>

    <a href="{{ route('tareas.index') }}" class="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition">Ver Tareas</a>
</div>
@endsection
