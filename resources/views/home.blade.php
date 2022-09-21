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
        <!-- Google Fonts -->
        <!-- MDB -->
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
                    <a class="nav-link mx-2  fw-semibold" aria-current="page" href="/cardapio">Cardápio</a>
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
            <h1 class="fw-semibold fs-1"> Na sua porta </h1>
            <p> Cansado de pegar filas e ficar esperando sua vez chegar? <br> Com nosso sistema integrado, é possível comprar seus produtos com antecedência.</p>
        </div>
        <div class="item">
            <img src="{{ asset('images/home/delivery.png') }}"/>
        </div>
    </section>
    

<!-- Carrosel de Depoimentos -->
    <hr class="hr"/>
    <div id="carouselExampleControls" class="carousel slide text-center carousel-dark" data-mdb-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                    <h3 class="mb-3"><b>Ana Clara</b></h3>
                    <p>Cliente</p>
                    <p class="text-muted">
                        <i class="fas fa-quote-left pe-2"></i>
                        Simplesmente incrível. Era uma zona esse tanto de fila que enfrentavamos no começo, mas depois do novo sistema de compras, eu posso Simplesmente
                        comprar a comida, retirar em minutos e ir embora.
                    </p>
                    </div>
                </div>
                <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="far fa-star fa-sm"></i></li>
                </ul>
            </div>
            <div class="carousel-item">
                <img class="rounded-circle shadow-1-strong mb-4" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar" style="width: 150px;" />
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                    <h5 class="mb-3">John Doe</h5>
                    <p>Web Developer</p>
                    <p class="text-muted">
                        <i class="fas fa-quote-left pe-2"></i>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                        nesciunt sint eligendi reprehenderit reiciendis.
                    </p>
                    </div>
                </div>
                <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="far fa-star fa-sm"></i></li>
                </ul>
            </div>
            <div class="carousel-item">
            <img class="rounded-circle shadow-1-strong mb-4" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" alt="avatar" style="width: 150px;" />
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                <h5 class="mb-3">Anna Deynah</h5>
                <p>UX Designer</p>
                <p class="text-muted">
                    <i class="fas fa-quote-left pe-2"></i>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                    nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
                    fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
                    doloremque.
                </p>
                </div>
            </div>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="far fa-star fa-sm"></i></li>
            </ul>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls"
            data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls"
            data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> <hr class="hr" />
<!-- Carrosel de depoimentos -->


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