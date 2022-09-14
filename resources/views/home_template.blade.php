<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Conexão dos arquivos CSS -->

        <link rel="stylesheet" type="text/css" href="{{ asset('css/general.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/homecss/home.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/homecss/navbar.css') }}">
        <!-- Bootstrap Conection -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Fim dos arquivos CSS -->

    @yield('titulo')
</head>
<body>

<!-- Navbar -->
    <nav class="navbar navbar-expand-lg p-3 bg-info sticky-sm-top" id="headerNav">
        <div class="container-fluid">
            <a class="navbar-brand d-block d-lg-none" href="/">
                <img src="{{ asset('images/logo_in.png') }}" height="60" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto ">
                    <li class="nav-item">
                    <a class="nav-link mx-2  fw-semibold" aria-current="page" href="#cardapio">Cardápio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link mx-2 fw-semibold" href="#">Carrinho</a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                    <a class="nav-link mx-2" href="#">
                        <img src="{{ asset('images/logo_in.png') }}" height="50" />
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link mx-2 fw-semibold" href="/login">Login</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link mx-2 dropdown-toggle fw-semibold" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Mais
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item text-secondary fw-bold" href="/contato">Suporte Online</a></li>
                        <li><a class="dropdown-item text-secondary " href="/equipe">Nossa Equipe</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- Fim da Navbar -->


<!-- Começo do Body -->
    @yield('conteudo_body')
<!-- Fim do Body -->


<!-- Começo do Rodapé --> 

    <div class="rodape">
        <p class="textos"> © 2022 Copyright by <a class="link_rodape" href="#">InfoNutre</a> - Todos os direitos reservados.</p>
    </div>

<!-- Fim do Rodapé --> 

    <script type="text/javascript" src="{{ asset('js/homejs/home.js') }}"></script>
    <!-- Bootstrap Conection -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>