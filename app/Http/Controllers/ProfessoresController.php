<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\professores;
use App\Models\API;
use Illuminate\Support\Facades\Http;

class ProfessoresController extends Controller
{
    public function index()
    {
        $professores = professores::orderBy('id', 'asc')->paginate(10);
        return view('professores.index', compact('professores'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'RP' => 'required',
            'Nome' => 'required',
            'Sobrenome' => 'required',
        ]);

        professores::create([
            'RP' => $request->RP,
            'Nome' => $request->Nome,
            'Sobrenome' => $request->Sobrenome,
        ]);

        return redirect()->route('professores.index')->with('ok', 'Professores cadastrados com sucesso!');
    }

    public function show(professores $professor)
    {
        $professor->where('RP', 'LIKE', $professor->RP)->get();
        return view('professores.show', compact('professor'));
    }

    public function edit(professores $professores)
    {
        return view('professores.edit', compact('professores'));
    }

    public function update(Request $request, professores $professores)
    {
        $request->validate([
            'RP' => 'required',
            'Nome' => 'required',
            'Sobrenome' => 'required',
        ]);

        $professores->update([
            'RP' => $request->RP,
            'Nome' => $request->Nome,
            'Sobrenome' => $request->Sobrenome,
        ]);

        return redirect()->route('professores.index')->with('ok', 'Professor atualizado com sucesso!');
    }

    public function destroy(professores $professores)
    {
        $professores->delete();
        return redirect()->route('professores.index')->with('ok', 'Professor removido com sucesso!');
    }

}

