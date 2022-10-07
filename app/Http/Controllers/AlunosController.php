<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alunos;

class AlunosController extends Controller
{   
    public function index()
    {
        $alunos = alunos::orderBy('id','desc')->paginate();
        return view('alunos.index', compact('alunos'));

    }

    public function CreateView()
    {
        return view('alunos.create');
    }

    public function Create(Request $request)
    {   
        $request->validate([
            'RA' => 'required',
            'Nome' => 'required',
            'Sobrenome' => 'required',
        ]);

        alunos::create([
            'RA' => $request->RA,
            'Nome' => $request->Nome,
            'Sobrenome' => $request->Sobrenome,
        ]);

        return redirect()->route('alunos.index')-with('ok', 'Alunos cadastrado com sucesso!');
        
    }

    public function Read(Request $request)
    {
        $aluno = alunos::where('RA', 'LIKE', $request->RA)->get();
        return view('alunos.edit', compact('alunos'));
    }

    public function Update(Request $request, alunos $aluno)
    {   
        $request->validate([
            'RA' => 'required',
            'Nome' => 'required',
            'Sobrenome' => 'required',
        ]);

        $aluno = fill([
            'RA' => $request->RA,
            'Nome' => $request->Nome,
            'Sobrenome' => $request->Sobrenome,
        ]);

        return redirect()->route('alunos.index')->with('ok', 'Aluno atualizado com sucesso!');
    }
    
    public function Delete(alunos $aluno)
    {
        $aluno->delete();
        return redirect()->route('alunos.index')->with('ok', 'Alunos removido com sucesso!');
    }
}
