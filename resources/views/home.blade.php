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

    <!-- Fim dos arquivos CSS -->

    <title>Infonutre - Home</title>
</head>
<body>

<!-- Começo do Header -->
    <header class="header">
        <img class="logo" src="{{ asset('images/logo_in.png') }}"href=".page-top"/>
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
            <li><a href="#" class="link link-theme link-arrow">HOME</a></li>
            <li><a href="#" class="link link-theme link-arrow">Cardápio</a></li>
            <li><a href="#" class="link link-theme link-arrow">Sobre nós</a></li>
            <li><a href="login" class="link link-theme link-arrow">Login</a></li>
        </ul>
    </header>
<!-- Fim do Header -->

<!-- Começo do Body -->

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!-- Fim do Body -->

<!-- Botão de Rolagem -->


<!-- Começo do Rodapé --> 

    <div class="rodape">
        <p class="textos"> © 2022 Copyright by <a class="link_rodape" href="#">InfoNutre</a> - Todos os direitos reservados.</p>
    </div>

<!-- Fim do Rodapé --> 

    <script type="text/javascript" src="{{ asset('js/homejs/main.js') }}"></script>
</body>
</html>