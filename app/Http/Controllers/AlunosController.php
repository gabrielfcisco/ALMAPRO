<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alunos;

class AlunosController extends Controller
{   
    public function Create(Request $request)
    {
        $aluno = new alunos;
        
        $aluno->RA = $request->RA;
        $aluno->Nome = $request->Nome;
        $aluno->Sobrenome = $request->Sobrenome;
 
        $aluno->save();
        
    }

    public function Read(Request $request)
    {
        $aluno = alunos::where('Nome', 'LIKE', $request->Nome)->get();
        dd($aluno);
    }

    public function Update(Request $request)
    {
        $aluno = alunos::where('Nome', 'LIKE', $request->Nome)
                                ->update(['RA', $request->RA])
                                ->update(['Nome', $request->Nome])
                                ->update(['Sobrenome', $request->Sobrenome]);
        dd($aluno);
    }
    
    public function Delete()
    {

    }
}
