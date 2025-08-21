<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'estado',
        'categoria',
        'fecha_limite',
        'user_id',
    ];

    protected $casts = [
        'fecha_limite' => 'date',
    ];
}
