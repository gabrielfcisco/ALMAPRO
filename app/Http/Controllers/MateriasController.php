<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriasController extends Controller
{
    public function index()
    {
        $alunos = alunos::orderBy('id', 'asc')->paginate(10);
        return view('materias.index', compact('materias'));
    }
}
