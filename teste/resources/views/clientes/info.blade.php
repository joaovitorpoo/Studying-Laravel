@extends('layouts.principal')

@section('conteudo')
    <h3>Informações do Cliente</h3>

    <p>ID: {{ $Cliente['id'] }}</p>
    <p>Nome: {{ $Cliente['nome'] }}</p>
    <br>
    <a href="{{ route('clientes.index')}}">Voltar</a>
@endsection