<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        $totalTareas = Tarea::where('user_id', $userId)->count();
        $tareasPendientes = Tarea::where('user_id', $userId)->where('estado', 'pendiente')->count();
        $tareasEnProgreso = Tarea::where('user_id', $userId)->where('estado', 'en_progreso')->count();
        $tareasCompletadas = Tarea::where('user_id', $userId)->where('estado', 'completada')->count();

        $ultimasTareas = Tarea::where('user_id', $userId)
                            ->orderBy('created_at', 'desc')
                            ->take(5)
                            ->get();

        return view('dashboard', compact(
            'totalTareas',
            'tareasPendientes',
            'tareasEnProgreso',
            'tareasCompletadas',
            'ultimasTareas'
        ));
    }
}
