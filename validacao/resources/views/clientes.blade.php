<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Pagina de Clientes</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <style>
            body { padding: 20px; }
        </style>
    </head>
    <body>
        <main role="main">
            <div class="row">
                <div class="container  col-sm-8 offset-md-2">
                    <div class="card border">
                        <div class="card-header">
                            <h5 class="card-title">Cadastro de Cliente</h5> 
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover" id="tabelaprodutos" >
                                <thead>
                                    <tr> 
                                        <th>Código</th> 
                                        <th>Nome</th> 
                                        <th>Idade</th> 
                                        <th>Email</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($clientes as $c)
                                        <tr> 
                                            <td>{{$c->id}}</td> 
                                            <td>{{$c->nome}}</td> 
                                            <td>{{$c->idade}}</td> 
                                            <td>{{$c->email}}</td> 
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>
