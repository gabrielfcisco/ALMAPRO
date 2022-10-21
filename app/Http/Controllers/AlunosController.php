<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alunos;
use App\Models\Materias;
use Illuminate\Support\Facades\Http;

class AlunosController extends Controller
{  
    public function index(alunos $aluno)
    {
        $alunos = alunos::orderBy('Nome', 'asc')->paginate(10);
        $id = explode(',', $aluno->id_materia);

        foreach($id as $i)
        {
            $materias = Materias::where('id', '=', $i)->get();
        }

        return view('alunos.index', compact('alunos', 'materias'));
    }

    public function create()
    {   
        $filmes = array();

        //$auxcategories =  Http::get('https://www.learn-laravel.cf/categories');
        $categories = json_decode(Http::get('https://www.learn-laravel.cf/categories'), true);

        for($j=1; $j<7; $j++) {

            //$api = Http::get('https://www.learn-laravel.cf/movies?page=' . $j);
            $api = json_decode(Http::get('https://www.learn-laravel.cf/movies?page=' . $j), true);
            
            foreach ($api['data'] as $filme){
                for($i=0 ; $i<6; $i++){
                    if($filme['category_id'] == $i+1){
                        $filmes = array(
                            'id' => $filme['id'], 
                            'nome' => $filme['name'],
                            'category' => $categories[$i]['name']);
                    }
                }
            };
        } 

        $materias = materias::orderBy('Nome', 'asc')->get();

        return view('alunos.create', compact('materias', 'filmes'));
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
            'Filmes' => implode(", ", $request->Filmes),
            'id_materia' => $request->id_materia,
        ]);

        return redirect()->route('alunos.index')->with('ok', 'alunos cadastrados com sucesso!');
    }
    
    public function edit(alunos $aluno)
    {
        $filmes = array();

        //$auxcategories =  Http::get('https://www.learn-laravel.cf/categories');
        $categories = json_decode(Http::get('https://www.learn-laravel.cf/categories'), true);

        for($j=1; $j<7; $j++) {

            //$api = Http::get('https://www.learn-laravel.cf/movies?page=' . $j);
            $api = json_decode(Http::get('https://www.learn-laravel.cf/movies?page=' . $j), true);
            
            foreach ($api['data'] as $filme){
                for($i=0 ; $i<6; $i++){
                    if($filme['category_id'] == $i+1){
                        $filmes = array(
                            'id' => $filme['id'], 
                            'nome' => $filme['name'],
                            'category' => $categories[$i]['name']);
                    }
                }
            };
        } 

        $materias = materias::orderBy('Nome', 'asc')->get();

        return view('alunos.edit', compact('aluno', 'materias', 'filmes'));
    }

    public function update(Request $request, alunos $aluno)
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
            'Filmes' => implode(", ", $request->Filmes),
            'id_materia' => $request->id_materia,
        ]);

        return redirect()->route('alunos.index')->with('ok', 'Aluno atualizado com sucesso!');
    }

    public function destroy(alunos $aluno)
    {
        $aluno->delete();
        return redirect()->route('alunos.index')->with('ok', 'aluno removido com sucesso!');
    }
}
