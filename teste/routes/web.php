<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeuControlador;

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

// linkando rota com controlador
Route::get('produtos', [MeuControlador::class, 'produtos']);
Route::get('nome', [MeuControlador::class, 'getNome']);
Route::get('idade', [MeuControlador::class, 'getIdade']);

// passando parametros para funcao do controlador
Route::get('multiplicar/{n1}/{n2}', [MeuControlador::class, 'multiplicar']);