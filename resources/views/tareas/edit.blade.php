@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10 max-w-lg">
    <h1 class="text-2xl font-bold mb-6">{{ isset($tarea) ? 'Editar Tarea' : 'Crear Tarea' }}</h1>

    <form action="{{ isset($tarea) ? route('tareas.update', $tarea) : route('tareas.store') }}" method="POST" class="bg-white shadow-md rounded-lg p-6 space-y-4">
        @csrf
        @if(isset($tarea))
            @method('PUT')
        @endif

        <div>
            <label class="block text-gray-700">Título</label>
            <input type="text" name="titulo" value="{{ $tarea->titulo ?? old('titulo') }}" class="w-full border rounded px-3 py-2 mt-1">
        </div>

        <div>
            <label class="block text-gray-700">Descripción</label>
            <textarea name="descripcion" class="w-full border rounded px-3 py-2 mt-1">{{ $tarea->descripcion ?? old('descripcion') }}</textarea>
        </div>

        <div>
            <label class="block text-gray-700">Estado</label>
            <select name="estado" class="w-full border rounded px-3 py-2 mt-1">
                @foreach(['pendiente','en_progreso','completada'] as $estado)
                    <option value="{{ $estado }}" @if(isset($tarea) && $tarea->estado == $estado) selected @endif>{{ ucfirst($estado) }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block text-gray-700">Categoría</label>
            <input type="text" name="categoria" value="{{ $tarea->categoria ?? old('categoria') }}" class="w-full border rounded px-3 py-2 mt-1">
        </div>

        <div>
            <label class="block text-gray-700">Fecha Límite</label>
            <input type="date" name="fecha_limite" value="{{ $tarea->fecha_limite ?? old('fecha_limite') }}" class="w-full border rounded px-3 py-2 mt-1">
        </div>

        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition">
            {{ isset($tarea) ? 'Actualizar' : 'Crear' }}
        </button>
    </form>
</div>
@endsection
