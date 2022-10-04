<!-- Navbar -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/homecss/navbar.css') }}">

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
                        <a class="nav-link mx-2 fw-semibold" href="{{url('/cart')}}">Carrinho</a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link mx-2" href="/">
                            <img src="{{ asset('images/logo_in.png') }}" height="50" />
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 fw-semibold" href="" data-bs-toggle="offcanvas" data-bs-target="#abaperfil" aria-controls="abaperfil">Perfil</a>
                    </li>

                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link mx-2 dropdown-toggle fw-semibold" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Mais
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item text-secondary fw-bold" data-bs-toggle="offcanvas" href="#contatomodal" role="button" aria-controls="contatomodal">Contato</a></li>
                        <li><a class="dropdown-item text-secondary " href="{{url('/equipe')}}">Nossa Equipe</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

        
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="abaperfil" aria-labelledby="abaperfil">
                <div class="offcanvas-header">
                @auth
                    <h5 class="offcanvas-title" id="offcanvasRightLabel"> Bem vindo(a), <b>{{auth()->user()->username}} </b> ! </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body"><br> <hr> <br>
                    <div class="imagem_perfil d-flex justify-content-center">
                        <img src="{{ asset('images/default_profile.png') }}" alt="Foto Default de Perfil"/>
                    </div><br>
                    <div class="email_usuario d-flex justify-content-center">
                        <br><br>
                        <span> <b>{{auth()->user()->email}}</b> </span>
                    </div>
                    <div class="email_usuario d-flex justify-content-center">
                        <span> Saldo em Conta: <b>R${{auth()->user()->coins}}</b> </span>
                    </div><br>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('logout.perform') }}" class="btn btn-outline-danger text-center">Deslogar</a>
                    </div>
                @endauth
                @guest
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Entrar</a>
                        <a href="{{ route('register.perform') }}" class="btn btn-danger">Cadastrar</a>
                    </div>
                @endguest
                </div>
            </div>
<!-- Fim da Navbar -->