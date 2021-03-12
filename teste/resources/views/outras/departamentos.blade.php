@extends('layouts.principal')

@section('conteudo')
    <h3>Departamentos</h3>

    <ul>
        <li>Eletronicos</li>
        <li>Roupas</li>
        <li>Acessorios</li>
        <li>Computadors & Notebook</li>
    </ul>

    @component('components.alerta', ['titulo'=>'Erro Fatal'])
        <p><strong>Erro Inesperado</strong></p>
        <p>Ocorreu um erro inesperado</p>
    @endcomponent
    
@endsection