@extends('layouts.login_template')

@section('titulo')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/authcss/login.css') }}">
    <title> Infonutre | Login </title>
@endsection

@section('content')

    <script type="text/javascript" src="{{ asset('js/authjs/login.js') }}"></script>

    <div id="wrapper">
		<div id="left">
            <div id="signin">
                <div class="logo">
                    <img src="{{ asset('images/logo_in.png') }}" href="#"/>
                </div>
                <form method="post" action="{{ route('login.perform') }}">
                    
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                    @include('layouts.partials.messages')

                    <div>
                        <label>E-mail</label>
                        <input type="text" class="text-input" name="username" value="{{ old('username') }}" placeholder="" required="required" autofocus>
                        @if ($errors->has('username'))
                            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                        @endif
                    </div>
                    
                    <div>
                        <label>Senha</label>
                        <input type="password" class="text-input" name="password" value="{{ old('password') }}" placeholder="" required="required">
                        @if ($errors->has('password'))
                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <button type="submit" class="primary-btn">Acessar</button>
                </form>

                <div class="links">
                    <a href="#">Esqueceu sua senha?</a>
                </div>
                <div class="or">
                    <hr class="bar"/>
                    <span>OU</span>
                    <hr class="bar"/>
                </div>
                <a href="{{url('/register')}}" class="secondary-btn">Crie sua conta</a>
		    </div>
		</div>
		<div id="right">
		  <div id="showcase">
			<div class="showcase-content">
			  <h1 class="showcase-text">
                <h1><stronger>Bem-vindo a InfoNutre</stronger></h1>
                <hr>
                <h3>Uma maneira simples e prática de matar sua fome. <br> É novo aqui? Fique a vontade para criar sua conta, é de graça!</h3>
			  </h1>
			</div>
		  </div>
		</div>
	</div>
@endsection