<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'diretor',
        'genero',
        'classificacao',
        'sinopse',
        'data_lancamento',
        'nota',
    ];
}
