<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessoresController extends Controller
{

    public function index()
    {
        $alunos = professores::orderBy('id', 'asc')->paginate(10);
        return view('alunos.index', compact('alunos'));
    }

    public function create()
    {   
        $filmes = array();

        $auxcategories =  Http::get('https://www.learn-laravel.cf/categories');
        $categories = json_decode($auxcategories, true);

        for($j=1; $j<7; $j++) {

            $api = Http::get('https://www.learn-laravel.cf/movies?page=' . $j);
            $auxjson = json_decode($api, true);
            $api = $auxjson['data'];

            foreach ($api as $filme){
                for($i=0 ; $i<6; $i++){
                    if($filme['category_id'] == $i+1){
                        $filmes[] = array(
                            'id' => $filme['id'], 
                            'nome' => $filme['name'],
                            'category' => $categories[$i]['name']);
                    }
                }
            };
        } 

        return view('professores.create', ['filmes' => $filmes]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'RA' => 'required',
            'Nome' => 'required',
            'Sobrenome' => 'required',
            'Filmes' => 'required',
        ]);

        professores::create([
            'RA' => $request->RA,
            'Nome' => $request->Nome,
            'Sobrenome' => $request->Sobrenome,
            'Filmes' => $request->Filmes,
        ]);

        return redirect()->route('professores.index')->with('ok', 'Alunos cadastrados com sucesso!');
    }

    public function show(professores $aluno)
    {
        $aluno->where('RA', 'LIKE', $aluno->RA)->get();
        return view('professores.show', compact('aluno'));
    }

    public function edit(professores $aluno)
    {
        return view('alunos.edit', compact('professores
        '));
    }

    public function update(Request $request, professores $professores
    )
    {
        $request->validate([
            'RA' => 'required',
            'Nome' => 'required',
            'Sobrenome' => 'required',
        ]);

        $professores
        ->update([
            'RA' => $request->RA,
            'Nome' => $request->Nome,
            'Sobrenome' => $request->Sobrenome,
        ]);

        return redirect()->route('professores.index')->with('ok', 'professores
         atualizado com sucesso!');
    }

    public function destroy(professores $professores
    )
    {
        $aluno->delete();
        return redirect()->route('alunos.index')->with('ok', 'Alunos removido com sucesso!');
    }
}
