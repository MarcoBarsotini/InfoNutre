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
                    <a class="nav-link mx-2 fw-semibold" href="{{url('/cart')}}">Carrinho</a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                    <a class="nav-link mx-2" href="/">
                        <img src="{{ asset('images/logo_in.png') }}" height="50" />
                    </a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link mx-2 dropdown-toggle fw-semibold" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Perfil
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li> <a>
                            @auth
                                <div class="text-center">
                                    <a class=" dropdown-item text-secondary fw-bold" href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Sair</a>
                                </div>
                            @endauth
                        </a></li>
                        <li> <a>
                        @guest
                            <div class="text-center">
                                <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2 dropdown-item text-secondary fw-bold">Fazer Login</a>
                                <a href="{{ route('register.perform') }}" class="btn btn-primary">Criar Conta</a>
                            </div>
                        @endguest
                        </a></li>
                    </ul>
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
<!-- Fim da Navbar -->