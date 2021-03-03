<h3>Clientes</h3>
<a href=" {{ route('clientes.create') }}">Novo Cliente</a>
<ol>
    @foreach ($Clientes as $c)
        <li>{{ $c['nome'] }} |
            <a href="{{ route('clientes.edit', $c['id']) }}">Editar</a>
            <a href="{{ route('clientes.show', $c['id']) }}">Informação</a>
        </li>
    @endforeach
</ol>