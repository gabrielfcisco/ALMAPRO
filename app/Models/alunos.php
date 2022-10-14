<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alunos extends Model
{
    use HasFactory;
    protected $fillable = [
        'RA',
        'Nome',
        'Sobrenome',
        'Filmes',
        'id_materia',       
    ];
}
