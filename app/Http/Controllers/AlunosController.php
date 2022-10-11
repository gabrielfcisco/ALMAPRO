<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alunos;
use App\Models\API;
use Illuminate\Support\Facades\Http;

class AlunosController extends Controller
{  
    public function index()
    {
        $alunos = alunos::orderBy('id', 'asc')->paginate(10);
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

        return view('alunos.create', ['filmes' => $filmes]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'RA' => 'required',
            'Nome' => 'required',
            'Sobrenome' => 'required',
            'Filmes' => 'required',
        ]);

        alunos::create([
            'RA' => $request->RA,
            'Nome' => $request->Nome,
            'Sobrenome' => $request->Sobrenome,
            'Filmes' => $request->Filmes,
        ]);

        return redirect()->route('alunos.index')->with('ok', 'Alunos cadastrados com sucesso!');
    }

    public function show(alunos $aluno)
    {   
        $aluno->where('RA', 'LIKE', $aluno->RA)->get();
        $aluno->Filmes = trim($aluno->Filmes, '[');
        $aluno->Filmes = trim($aluno->Filmes, ']');
        return view('alunos.show', compact('aluno'));
    }

    public function edit(alunos $aluno)
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
        return view('alunos.edit', compact('aluno'), ['filmes' => $filmes]);
    }

    public function update(Request $request, alunos $aluno)
    {
        $request->validate([
            'RA' => 'required',
            'Nome' => 'required',
            'Sobrenome' => 'required',
            'Filmes' => 'required',
        ]);

        $aluno->update([
            'RA' => $request->RA,
            'Nome' => $request->Nome,
            'Sobrenome' => $request->Sobrenome,
            'Filmes' => $request->Filmes,
        ]);

        return redirect()->route('alunos.index')->with('ok', 'Aluno atualizado com sucesso!');
    }

    public function destroy(alunos $aluno)
    {
        $aluno->delete();
        return redirect()->route('alunos.index')->with('ok', 'Alunos removido com sucesso!');
    }
}
