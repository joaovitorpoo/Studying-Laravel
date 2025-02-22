@extends('layouts.principal')

@section('Titulo', 'Clientes')

@section('conteudo')
    <h3>{{ $Titulo }}:</h3>
    <a href=" {{ route('clientes.create') }}">Novo Cliente</a>
    @if(count($Clientes)>0)
        <ul>
            @foreach ($Clientes as $c)
            <li>{{ $c['id'] }} {{ $c['nome'] }} |
                <a href="{{ route('clientes.edit', $c['id']) }}">Editar</a>
                <a href="{{ route('clientes.show', $c['id']) }}">Informação</a>
                <form action="{{ route('clientes.destroy', $c['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Apagar">
                </form>
            </li>
            @endforeach
        </ul>
    @else
        <h4>Nao existem clientes cadastrados.</h4>
    @endif
@endsection