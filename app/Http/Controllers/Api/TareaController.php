<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function index()
    {
        return response()->json(Tarea::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'fecha_limite' => 'nullable|date',
            'estado' => 'nullable|string',
        ]);

        $tarea = Tarea::create($request->all());

        return response()->json($tarea, 201);
    }

    public function show(Tarea $tarea)
    {
        return response()->json($tarea);
    }

    public function update(Request $request, Tarea $tarea)
    {
        $request->validate([
            'titulo' => 'sometimes|required|string|max:255',
            'descripcion' => 'nullable|string',
            'fecha_limite' => 'nullable|date',
            'estado' => 'nullable|string',
        ]);

        $tarea->update($request->all());

        return response()->json($tarea);
    }

    public function destroy(Tarea $tarea)
    {
        $tarea->delete();
        return response()->json(['message' => 'Tarea eliminada']);
    }
}
