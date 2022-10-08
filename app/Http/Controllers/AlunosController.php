<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alunos;
use App\Models\API;
use Illuminate\Support\Facades\Http;

class AlunosController extends Controller
{    
    public function fetch()
    {
        $api = Http::get('https://www.learn-laravel.cf/movies?page=1');
        $categories =  Http::get('https://www.learn-laravel.cf/categories');

        $auxjson = json_decode($api, true);
        $filmes = $auxjson['data'];

        $auxcategories = json_decode($categories, true);

        foreach ($filmes as $filme){
        
            for($i=0; $i<5 ;$i++){
                if($filme['category_id'] == $auxcategories[$i]['id']){
                    $filme['category_id'] = $auxcategories[$i]['id'];
                    print_r($filme);
                }
            }
            
        }

        dd($filme);

    }

    public function index()
    {
        $alunos = alunos::orderBy('id', 'asc')->paginate(10);
        return view('alunos.index', compact('alunos'));
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
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

        return redirect()->route('alunos.index')->with('ok', 'Alunos cadastrados com sucesso!');
    }

    public function show(alunos $aluno)
    {
        $aluno->where('RA', 'LIKE', $aluno->RA)->get();
        return view('alunos.show', compact('aluno'));
    }

    public function edit(alunos $aluno)
    {
        return view('alunos.edit', compact('aluno'));
    }

    public function update(Request $request, alunos $aluno)
    {
        $request->validate([
            'RA' => 'required',
            'Nome' => 'required',
            'Sobrenome' => 'required',
        ]);

        $aluno->update([
            'RA' => $request->RA,
            'Nome' => $request->Nome,
            'Sobrenome' => $request->Sobrenome,
        ]);

        return redirect()->route('alunos.index')->with('ok', 'Aluno atualizado com sucesso!');
    }

    public function destroy(alunos $aluno)
    {
        $aluno->delete();
        return redirect()->route('alunos.index')->with('ok', 'Alunos removido com sucesso!');
    }
}
