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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    echo 'Ola! Seja bem vindo.';
});

Route::get('/ola/sejabemvindo', function () {
    echo 'Ola! Seja bem vindo.';
});

// Rotas com parametros 
Route::get('/ola/{nome}', function ($nome) {
    echo 'Ola! Seja bem vindo'. $nome;
});

Route::get('/ola/{nome}/{sobrenome}', function ($nome, $sobrenome) {
    echo 'Ola! Seja bem vindo '. $nome . " " .$sobrenome;
});

// Rota com parametros opcionais
Route::get('/seunome/{nome?}', function ($nome=null) {
    if (isset($nome))
        return 'Ola! Seja bem vindo, '. $nome.'!';
    return 'Voce nao digitou o seu nome.';
});

// Rotas com regras usando Expressão regular 
Route::get('/rotacomregras/{nome}/{n}', function ($nome, $n) {
    for ($i=0; $i < $n; $i++) 
        echo 'Ola! Seja bem vindo, '. $nome .'! <br>';
})->where('nome','[A-Za-z]+')->where('n','[0-9]+');