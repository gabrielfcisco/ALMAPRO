<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class professores extends Model
{
    use HasFactory;
    protected $fillable = [
        'RP',
        'Nome',
        'Sobrenome',
        'Materia',  
    ];
}
