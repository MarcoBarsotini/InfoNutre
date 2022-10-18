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

        @auth
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="abaperfil" aria-labelledby="abaperfil">
                
                    <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasRightLabel"> Bem vindo(a), <b>{{auth()->user()->username}} </b> ! </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body"><br> <hr> <br>
                    <div class="imagem_perfil d-flex justify-content-center">
                        <img src="{{ asset('images/default_profile.png') }}" alt="Foto Default de Perfil"/>
                    </div><br>
                    <div class="email_usuario d-flex justify-content-center">
                        <br><br>
                        <span> <b>{{auth()->user()->email}}</b> </span>
                    </div>
                    <div class="membro d-flex justify-content-center">
                        <span> Membro desde: {{auth()->user()->created_at}}</span>
                    </div><br>
                    <div class="email_usuario d-flex justify-content-center">
                        <span> Saldo em Conta: <b>R${{auth()->user()->coins}}</b> </span>
                    </div><br>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('logout.perform') }}" class="btn btn-outline-danger text-center">Deslogar</a>
                    </div>
                </div>
            </div>
        @endauth


        @guest
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="abaperfil" aria-labelledby="abaperfil">
                    
                    <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasRightLabel"> Perfil </b> ! </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body"><br> <hr> <br>
                    <div class="imagem_perfil d-flex justify-content-center">
                        <img src="{{ asset('images/default_profile.png') }}" alt="Foto Default de Perfil"/>
                    </div><br>
                    <div class="email_usuario d-flex justify-content-center">
                        <br><br>
                        <span>  </span>
                    </div>
                    <div class="email_usuario d-flex justify-content-center">
                        <span>Oops, Parece que você não tá logado :( </span> <br>
                    </div><br>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Entrar</a>
                        <a href="{{ route('register.perform') }}" class="btn btn-danger">Criar Conta</a>
                    </div>
                </div>
            </div>
        @endguest
<!-- Fim da Navbar -->


<!-- Formulário de Contato -->
<div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="contatomodal" aria-labelledby="contatomodal">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Contato</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div>
                    <img src="{{ asset('images/home/ajuda.svg') }}" class="rounded mx-auto d-block" alt="Pessoas conversando"/>
                    <h4 class="text-center"> Algum problema? </h4> 
                    <h6 class="text-center"> Ficaremos felizes em resolver! </h6>
                    <br> <br> 
                </div>
                <div>
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label"> Seu Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Descreva seu problema / Dúvida</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>De onde é?</option>
                            <option value="2">Sou um cliente</option>
                            <option value="1">Sou uma Empresa</option>
                        </select> <br>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Anexo <b>(Opcional)</b></label>
                            <input class="form-control form-control-sm" id="formFileSm" type="file">
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-danger">Enviar</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    <!-- Formulário de Contato -->