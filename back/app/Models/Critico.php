<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Critico extends Model
{
    use HasFactory;
    protected $fillable = [
        'semestre_id',
        'user_id',
    ];
}
