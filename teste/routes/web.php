<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('produtos', function () {
    return view('outras.produtos');
})->name('produtos');
Route::get('departamentos', function () {
    return view('outras.departamentos');
})->name('departamentos');
Route::get('opcoes/{opcao?}', function ($opcao=null) {
    return view('outras.opcoes', compact(['opcao']));
})->name('opcoes');

// linkando rota com controlador
Route::get('nome', 'MeuControlador@getNome');
Route::get('idade', 'MeuControlador@getIdade');

// passando parametros para funcao do controlador
Route::get('multiplicar/{n1}/{n2}', 'MeuControlador@multiplicar');

Route::resource('clientes', 'ClienteControlador');