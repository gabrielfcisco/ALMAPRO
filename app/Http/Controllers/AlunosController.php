<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alunos
;
use App\Models\Materias;
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
        /*$filmes = array();

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
        } */

        $materias = materias::orderBy('Nome', 'asc')->get();

        return view('alunos.create', compact('materias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'RA' => 'required',
            'Nome' => 'required',
            'Sobrenome' => 'required',
            'Filmes' => 'required',
            'id_materia' => 'required',
        ]);

        alunos::create([
            'RA' => $request->RA,
            'Nome' => $request->Nome,
            'Sobrenome' => $request->Sobrenome,
            'Filmes' => $request->Filmes,
            'id_materia' => $request->id_materia,
        ]);

        return redirect()->route('alunos.index')->with('ok', 'alunos cadastrados com sucesso!');
    }

    public function show(alunos $aluno)
    {   
        $aluno->where('RA', 'LIKE', $aluno->RA)->get();
        $id = explode(',', $aluno->id);

        $materias = array();
        foreach($id as $i)
        {
        $materias = Materias::where('id', 'LIKE', $i)->get();
        }

        return view('alunos.show', compact('aluno'), compact('materias'));
    }

    public function edit(alunos
     $aluno)
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
        } */

        $materias = materias::orderBy('Nome', 'asc')->get();

        return view('alunos
        .edit', compact('aluno'), compact('materias'));
    }

    public function update(Request $request, alunos
     $aluno)
    {
        $request->validate([
            'RA' => 'required',
            'Nome' => 'required',
            'Sobrenome' => 'required',
            'Filmes' => 'required',
            'id_materia' => 'required',
        ]);

        $aluno->update([
            'RA' => $request->RA,
            'Nome' => $request->Nome,
            'Sobrenome' => $request->Sobrenome,
            'Filmes' => $request->Filmes,
            'id_materia' => $request->id_materia,
        ]);

        return redirect()->route('alunos
        .index')->with('ok', 'Aluno atualizado com sucesso!');
    }

    public function destroy(alunos
     $aluno)
    {
        $aluno->delete();
        return redirect()->route('alunos
        .index')->with('ok', 'alunos
         removido com sucesso!');
    }
}
