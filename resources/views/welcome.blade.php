@extends('layouts.wguest')

@section('content')
<div class="min-h-screen bg-gray-50 flex flex-col items-center justify-center px-6 py-12">

    {{-- Título principal --}}
    <div class="text-center mb-10">
        <h1 class="text-5xl font-bold text-gray-900 mb-4">Bienvenido al Sistema de Tareas</h1>
        <p class="text-lg text-gray-600">Organiza tus tareas y proyectos de manera rápida y sencilla.</p>
    </div>

    {{-- Botones principales --}}
    <div class="flex flex-col sm:flex-row gap-4 mb-10">
        @if (Route::has('login'))
            @auth
                <script>
                    window.location.href = "{{ url('/dashboard') }}";
                </script>
            @else
                <a href="{{ route('login') }}" class="px-6 py-3 bg-green-500 text-white font-medium rounded-lg shadow hover:bg-green-600 transition">
                    Iniciar Sesión
                </a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="px-6 py-3 bg-indigo-500 text-white font-medium rounded-lg shadow hover:bg-indigo-600 transition">
                        Registrarse
                    </a>
                @endif
            @endauth
        @endif
    </div>

    {{-- Características / información --}}
    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-5xl w-full">
        <div class="bg-white rounded-lg shadow p-6 text-center">
            <h2 class="text-xl font-semibold mb-2">Crear Tareas</h2>
            <p class="text-gray-700">Agrega nuevas tareas y gestiona tus proyectos fácilmente.</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6 text-center">
            <h2 class="text-xl font-semibold mb-2">Filtrar y Organizar</h2>
            <p class="text-gray-700">Filtra tareas por estado o categoría para mayor productividad.</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6 text-center">
            <h2 class="text-xl font-semibold mb-2">Notificaciones</h2>
            <p class="text-gray-700">Recibe alertas de tareas pendientes para no olvidar nada importante.</p>
        </div>
    </div>
</div>
@endsection
