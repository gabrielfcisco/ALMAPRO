<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\materias;
use App\Models\API;
use Illuminate\Support\Facades\Http;

class MateriasController extends Controller
{    

    public function index()
    {
        $materias = materias::orderBy('id', 'asc')->paginate(10);
        return view('materias.index', compact('materias'));
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
            'Creditos' => $request->Sobrenome,
            'RP' => $request->RP,
        ]);

        return redirect()->route('materias.index')->with('ok', 'materias cadastrados com sucesso!');
    }

    public function show(materias $materias)
    {
        $materias->where('RP', 'LIKE', $materias->RP)->get();
        return view('materias.show', compact('materia'));
    }

    public function edit(materias $materia)
    {
        return view('materias.edit', compact('materia'));
    }

    public function update(Request $request, materias $materia)
    {
        $request->validate([
            'Nome' => 'required',
            'Credito' => 'required',
            'RP' => 'required',
        ]);

        $materia->update([
            'Nome' => $request->Nome,
            'Credito' => $request->Credito,
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