<?php

namespace App\Http\Controllers;

use App\Models\alunos;
use Illuminate\Http\Request;
use App\Models\materias;
use App\Models\professores;
use Illuminate\Support\Facades\Http;

class MateriasController extends Controller
{

    public function index()
    {
        $materias = materias::orderBy('id', 'asc')->paginate(10);
        return view('materias.index', compact('materias'));
    }

    public function create()
    {   
        $professore = professores::orderBy('id', 'asc')->get();
        return view('materias.create', compact('professore'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nome' => 'required',
            'Creditos' => 'required',
            'RP' => 'required',
        ]);

        materias::create([
            'Nome' => $request->Nome,
            'Creditos' => $request->Creditos,
            'RP' => $request->RP,
        ]);

        return redirect()->route('materias.index')->with('ok', 'Materias cadastradas com sucesso!');
    }

    public function show(materias $materia)
    {   
        $alunos = array();
        $materia->where('id', 'LIKE', $materia->id)->get();
        $professor = professores::where('RP', 'LIKE', $materia->RP)->first();
        $alunos = alunos::where('id_materia', 'LIKE', $materia->id)->get() ?? [];
        return view('materias.show', compact('alunos', 'materia', 'professor'));
    }

    public function edit(materias $materia)
    {
        $materia->where('id', 'LIKE', $materia->id)->get();
        $professore = professores::orderBy('id', 'asc')->get();
        return view('materias.edit', compact('materia'), compact('professore'));
    }

    public function update(Request $request, materias $materia)
    {
        $request->validate([
            'Nome' => 'required',
            'Creditos' => 'required',
            'RP' => 'required',
        ]);

        $materia->update([
            'Nome' => $request->Nome,
            'Creditos' => $request->Creditos,
            'RP' => $request->RP,
        ]);

        return redirect()->route('materias.index')->with('ok', 'Materia atualizada com sucesso!');
    }

    public function destroy(materias $materia)
    {
        $materia->delete();
        return redirect()->route('materias.index')->with('ok', 'Materia removida com sucesso!');
    }
}
