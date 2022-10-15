<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materias extends Model
{
    use HasFactory;
<<<<<<< Updated upstream

    protected $fillable = [
        'id',
        'Nome',
=======
    protected $fillable = [
        'id',
        'Nome',
        'Créditos',
>>>>>>> Stashed changes
    ];
}
