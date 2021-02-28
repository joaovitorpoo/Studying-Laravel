<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        // O Except cria uma ecessao pra nao requisitar o token csrf, deixando agente fazer os testes de requisicoes http sem dar erro.
        'requisicoes'
    ];
}
