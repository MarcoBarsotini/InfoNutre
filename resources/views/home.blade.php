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

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Fim dos arquivos CSS -->

    <title>InfoNutre | Home</title>
</head>
<body>

<!-- Começo do Header -->
    <header class="header">
        <img class="logo" src="{{ asset('images/logo_in.png') }}"href=".page-top"/>
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
            <li><a href="#" class="link link-theme link-arrow">HOME</a></li>
            <li><a href="#cardapio" class="link link-theme link-arrow">Cardápio</a></li>
            <li><a href="#" class="link link-theme link-arrow">Sobre nós</a></li>
            <li><a href="login" class="link link-theme link-arrow">Login</a></li>
        </ul>
    </header>

    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
<!-- Fim do Header -->

<!-- Começo do Body -->

    <br><br><br><br><br><br><br><br><br><br>
    <section id="cardapio"> 
        <div class="container_cards">
            <div class="cards">
                <div class="item"> 
                    <div>
                        <a> Coxinha de Frango </a>
                    </div>
                    <img src="{{ asset('images/food/coxinha.png') }}"/>
                    <div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCoxinha">
                        Teste
                    </button>
                    </div>
                </div>
                <div class="item"> Coca </div>
                <div class="item"> Pão </div>
            </div>
        </div>
    </section>
<!-- Fim do Body -->

<!-- Modal dos alimentos -->
    <div class="modal fade" id="modalCoxinha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Coxinha de Frango</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Um delicioso salgado tradicional do Brasil! Com massa crocante e com recheio de frango com catupiry
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
        </div>
    </div>
    </div>

<!-- Botão de Rolagem -->


<!-- Começo do Rodapé --> 

    <div class="rodape">
        <p class="textos"> © 2022 Copyright by <a class="link_rodape" href="#">InfoNutre</a> - Todos os direitos reservados.</p>
    </div>

<!-- Fim do Rodapé --> 

    <script type="text/javascript" src="{{ asset('js/homejs/home.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>