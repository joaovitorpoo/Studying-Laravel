<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// Rota com regras usando Expressão regular 
Route::get('/rotacomregras/{nome}/{n}', function ($nome, $n) {
    for ($i=0; $i < $n; $i++) 
        echo 'Ola! Seja bem vindo, '. $nome .'! <br>';
})->where('nome','[A-Za-z]+')->where('n','[0-9]+');

// Agrupamento de rotas
Route::prefix('/app')->group(function(){

    Route::get('/', function () {
        return view('app');
    })->name('app'); // Nomeando rota

    Route::get('/user', function () {
        // Mandando para view
        return view('user');
    })->name('app.user');

    Route::get('/profile', function () {
        return view('profile');
    })->name('app.profile');

});

Route::get('/produtos', function () {
    echo "<h1>Produtos</h1>";
    echo "<ol>";
    echo "<li>Notebook</li>";
    echo "<li>Impressora</li>";
    echo "<li>Mouse</li>";
    echo "</ol>";
})->name('meusprodutos');

// Redirecionamento requisições
Route::redirect('/todosprodutos1', '/produtos', 301);

Route::get('/todosprodutos2', function () {
    return redirect()->route('meusprodutos');
});

////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::post('/requisicoes', function (Request $request) {
    return 'Hello POST';
});

Route::delete('/requisicoes', function (Request $request) {
    return 'Hello DELETE';
});

Route::put('/requisicoes', function (Request $request) {
    return 'Hello PUT';
});

Route::patch('/requisicoes', function (Request $request) {
    return 'Hello PATCH';
});

Route::options('/requisicoes', function (Request $request) {
    return 'Hello OPTIONS';
});