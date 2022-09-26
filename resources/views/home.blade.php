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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Fim dos arquivos CSS -->

    <title>InfoNutre | Home</title>
</head>
<body>

<!-- Navbar -->
    <nav class="navbar navbar-expand-lg p-3 bg-danger sticky-sm-top" id="headerNav">
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
                    <a class="nav-link mx-2  fw-semibold" aria-current="page" href="{{url('/cardapio')}}">Cardápio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link mx-2 fw-semibold" href="#">Carrinho</a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                    <a class="nav-link mx-2" href="/">
                        <img src="{{ asset('images/logo_in.png') }}" height="50" />
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link mx-2 fw-semibold" href="{{url('/login')}}">Login</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link mx-2 dropdown-toggle fw-semibold" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Mais
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item text-secondary fw-bold" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Contato</a></li>
                        <li><a class="dropdown-item text-secondary " href="{{url('/equipe')}}">Nossa Equipe</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- Fim da Navbar -->

<!-- Começo do Body -->

    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">

            </div>
        </div>
    </section>

    <section class="container border border-opacity-50 rounded-3">
        <div class="item">
            <img src="{{ asset('images/home/delivery2.png') }}"/>
        </div>
        <div class="item">
            <h1 class="fw-semibold fs-1"> Rápido e Eficiente </h1>
            <p> Cansado de pegar filas e ficar esperando sua vez chegar? <br> Com nosso sistema integrado, é possível comprar seus produtos com antecedência.</p>
        </div>
    </section>

    <section class="container border border-opacity-50 rounded-3">
        <div class="item">
            <h1 class="fw-semibold fs-1"> Na porta da sua casa </h1>
            <p> Quer pedir aquele hamburguer, ou sua pizza e receber ela na sua casa? <br> Tranquilo! com nosso sistema de delivery, a gente entrega rapidinho.</p>
        </div>
        <div class="item">
            <img src="{{ asset('images/home/delivery.png') }}"/>
        </div>
    </section>



    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Contato</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                Tem algum problema ou sugestão? Sinta-se livre para nos enviar uma mensagem!
            </div>
            
        </div>
    </div>


<!-- Começo do Rodapé --> 

    <div class="rodape">
        <p class="textos"> © 2022 Copyright by <a class="link_rodape" href="#">InfoNutre</a> - Todos os direitos reservados.</p>
    </div>

<!-- Fim do Rodapé --> 

<!-- Conexões JS -->
    <script type="text/javascript" src="{{ asset('js/homejs/home.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<!-- Conexões JS -->
</body>
</html>