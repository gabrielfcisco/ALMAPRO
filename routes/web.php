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
Route::get('/alunos/{RA}/{Nome}/{Sobrenome}', [AlunosController::class, 'Create']);
Route::get('busca/{Nome}', [AlunosController::class, 'Read']);
Route::get('atualizar/{RA}/{Nome}/{Sobrenome}', [AlunosController::class, 'Create']);

Route::get('/', function () {
    return view('welcome');
});
