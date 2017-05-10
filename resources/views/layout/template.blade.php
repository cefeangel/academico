<html>
    <head>
        <link href="/css/app.css" rel="stylesheet" >
        <link href="/css/custom.css" rel="stylesheet">
        <title>@yield('titulo')</title>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="">
                            Sistema Acadêmico
                        </a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/curso">Listagem</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/curso/novo">Novo</a></li>
                    </ul>
                </div>
            </nav>
            @yield('conteudo')

            <footer class="footer">
                <p>© Livro de Laravel da Casa do Código.</p>
            </footer>

        </div>
    </body>
</html>

