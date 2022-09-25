<?php

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
});

Route::get('user/{user:name}', function(\App\Models\User $user) {
    return $user;
});

/* Route::get('/users/{id?}', function ($id=null) {
    return $id;
    //return view('welcome');
})->name('empresa.a');
*/