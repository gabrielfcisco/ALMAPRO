<?php

use App\Http\Controllers\AlunosController;
use App\Models\alunos;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('alunos', AlunosController::class);

Route::get('filmes', [AlunosController::class, 'fetch']);

Route::resource('professores', ProfessoresController::class);

Route::resource('materias', MateriasController::class);

Route::get('/', function () {
    return view('welcome');
});
