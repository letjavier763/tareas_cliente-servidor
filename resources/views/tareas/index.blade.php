@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Listado de Tareas</h1>

    <a href="{{ route('tareas.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition mb-4 inline-block">Crear Nueva Tarea</a>

    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Título</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Descripción</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Estado</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Categoría</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Fecha Límite</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Acciones</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($tareas as $tarea)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4">{{ $tarea->id }}</td>
                    <td class="px-6 py-4">{{ $tarea->titulo }}</td>
                    <td class="px-6 py-4">{{ $tarea->descripcion }}</td>
                    <td class="px-6 py-4">{{ ucfirst($tarea->estado) }}</td>
                    <td class="px-6 py-4">{{ $tarea->categoria }}</td>
                    <td class="px-6 py-4">{{ $tarea->fecha_limite ? \Carbon\Carbon::parse($tarea->fecha_limite)->format('d/m/Y') : '-' }}</td>
                    <td class="px-6 py-4 space-x-2">
                        <a href="{{ route('tareas.edit', $tarea) }}" class="text-blue-600 hover:underline">Editar</a>
                        <form action="{{ route('tareas.destroy', $tarea) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('¿Seguro eliminar esta tarea?')" class="text-red-600 hover:underline">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
