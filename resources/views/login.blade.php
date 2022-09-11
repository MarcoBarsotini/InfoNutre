<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fazer Login</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/logincss/main.css') }}">

</head>
<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Poxa Vida!</h1>
                <br> <br>
                <span> Aparentemente nosso Servidor está em manutenção no momento e não é possível criar uma conta :( </span>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Entrar</h1>
                <div class="espacamento">
                    <span>É bom ver você de novo!</span>
                </div>
                
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Senha" />
                <a href="#">Esqueceu a senha?</a>
                <button>Entrar</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Bom ver você de novo!</h1>
                    <p>Para acessar sua conta, insira seus dados para continuar</p>
                    <button class="ghost" id="signIn">Entrar</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Olá, Amigo!</h1>
                    <p>Não tem uma conta? Vamos criar uma agora mesmo!</p>
                    <button class="ghost" id="signUp">Registrar</button>
                </div>
            </div>
        </div>
    </div>
    

    <script type="text/javascript" src="{{ asset('js/loginjs/login.js') }}"></script>
</body>
</html>