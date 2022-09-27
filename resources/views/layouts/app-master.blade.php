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
    
    @include('layouts.partials.navbar')

    <div>
        @yield('content')
    </div>    

    <!-- Conexões JS -->
        <script type="text/javascript" src="{{ asset('js/homejs/home.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <!-- Conexões JS -->
  </body>
</html>