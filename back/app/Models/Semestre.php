<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    use HasFactory;
    protected $fillable = [
        'semestre',
        'gestion',
        'activo',
        'fechaFin',
        'fechaInicio',
    ];
}
