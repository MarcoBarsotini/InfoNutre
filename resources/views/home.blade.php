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

    <title>InfoNutre | Home</title>
</head>
<body>

<!-- Navbar -->
    <nav class="navbar navbar-expand-lg p-3 bg-danger bg-gradient sticky-sm-top" id="headerNav">
        <div class="container-fluid">
            <a class="navbar-brand d-block d-lg-none" href="#home">
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

    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">

            </div>
        </div>
    </section>
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <section id="cardapio"> 
            <div class="container_cards">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/food/coxinha.png') }}" class="card-img-top" alt="Foto de uma Coxinha de Frango">
                <div class="card-body">
                    <h5 class="card-title"><b>Coxinha de Frango <br> R$5,00</h5></b>
                    <p class="card-text">Um delicioso salgado, recheado com Frango e Catupiry.</p>
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#modalCoxinha"> Informações </button>
                    <button type="button" class="btn btn-primary btn-sm">Comprar</button>
                </div>
            </div>

            <div class="container_cards">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/food/coca_2l.png') }}" class="card-img-top" alt="Foto de uma Coxinha de Frango">
                <div class="card-body">
                    <h5 class="card-title"><b>Coca Cola - 2L <br> R$10,00</h5></b>
                    <p class="card-text">Garrafa de Coca Cola, 2 Litros não retornável.</p>
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#modalCoca"> Informações </button>
                    <button type="button" class="btn btn-primary btn-sm">Comprar</button>
                </div>
            </div>
        </div>
    </section>
<!-- Fim do Body -->

<!-- Modal dos alimentos -->
    <div class="modal fade" id="modalCoxinha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>Coxinha de Frango - R$5,00</b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
                Um delicioso salgado tradicional do Brasil! Com massa crocante e com recheio de frango e uma generosa camada de catupiry. <br> <br>
                <b> Valores calóricos: </b> <br>
                - 274 kcal; <br>
                - 11,9 g de gordura; <br> <br>
                <span> <b>Atenção! os valores são apenas uma média.</b></span>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalCoca" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>Coca 2Litros - R$10,00</b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
                Está com sede, e vontade de beber algo para se refrescar? Sem problemas, uma coquinha gelada sempre resolve tudo. <br> <br>
                <b> Valores calóricos: </b> <br>
                - 60 kcal; <br>
                - 15g Carboidratos; <br>
                - 10mg Sódio; <br>
                - 11,9 g de gordura; <br> <br>
                <span> <b>Atenção! os valores são apenas uma média.</b></span>

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
    <!-- Bootstrap Conection -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>