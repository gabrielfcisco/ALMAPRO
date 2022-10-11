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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('businesses', [BusinessController::class, 'index']);
Route::get('users', [UserController::class, 'index'])->name('index');

/* Route::get('/users/{id?}', function ($id=null) {
    return $id;
    //return view('welcome');
})->name('empresa.a');
*/