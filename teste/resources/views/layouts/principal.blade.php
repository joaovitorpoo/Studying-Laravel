<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Views</title>
    <link rel="stylesheet" href="{{ asset('/css/principal.css') }}">
</html>
<body>
    <div class="row">
        <div class="coll">
            <div class="menu">
                <ul>
                    <li><a class="{{ request()->routeIs('clientes.*') ? 'active' : '' }}" href="{{ route('clientes.index') }}">Clientes</a></li>
                    <li><a class="{{ request()->routeIs('produtos') ? 'active' : '' }}" href="{{ route('produtos') }}">Produtos</a></li>
                    <li><a class="{{ request()->routeIs('departamentos') ? 'active' : '' }}" href="{{ route('departamentos') }}">Departamentos</a></li>
                </ul>
            </div>
        </div>
    </div>
    @yield('conteudo')
</body>
</html>