<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\UserController;
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
Route::get('/request', function(\Illuminate\Http\Request $request){
    $r = $request->whenHas('keyword', function($input){
        dd('x', $input);
    });

    if ($r) {
        dd('Faça alguma coisa');
    }

    dd($r);
    return 'x';
});

Route::get('user/{user}', [\App\Http\Controllers\UserController::class, 'show'])->name('users');

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