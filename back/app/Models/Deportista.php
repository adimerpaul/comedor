<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deportista extends Model
{
    use HasFactory;
    protected $fillable = [
        'formulario',
        'matricula',
        'actualizacion',
        'semestre_id',
        'user_id',
    ];
}
