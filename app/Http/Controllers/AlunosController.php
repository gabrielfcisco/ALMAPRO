<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\professores
;
use App\Models\API;
use Illuminate\Support\Facades\Http;

class ProfessoresController extends Controller
{   
        

    public function index()
    {
        $professores = professores::orderBy('id', 'asc')->paginate(10);
        return view('professores.index', compact('professores'));
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

        return redirect()->route('professores.index')->with('ok', 'professores cadastrados com sucesso!');
    }

    public function show(professores $aluno)
    {
        $aluno->where('RA', 'LIKE', $aluno->RA)->get();
        return view('professores
        .show', compact('aluno'));
    }

    public function edit(professores
     $aluno)
    {
        return view('professores
        .edit', compact('aluno'));
    }

    public function update(Request $request, professores
     $aluno)
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

        return redirect()->route('professores
        .index')->with('ok', 'Aluno atualizado com sucesso!');
    }

    public function destroy(professores
     $aluno)
    {
        $aluno->delete();
        return redirect()->route('professores
        .index')->with('ok', 'professores
         removido com sucesso!');
    }
}
