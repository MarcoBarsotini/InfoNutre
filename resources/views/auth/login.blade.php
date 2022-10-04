@extends('layouts.auth_template')

@section('titulo')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/authcss/login.css') }}">
    <title> Infonutre | Login </title>
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="formulario">
            <form method="post" action="{{ route('login.perform') }}">
                
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                
                <img src="{{ asset('images/logo_in.png') }}"/> 

                @include('layouts.partials.messages')

                <div class="form-group form-floating mb-3">
                    <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                    <label for="floatingName">Email ou Usuário </label>
                    @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                    @endif
                </div>
                
                <div class="form-group form-floating mb-3">
                    <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                    <label for="floatingPassword">Senha</label>
                    @if ($errors->has('password'))
                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <button class="w-100 btn btn-lg btn-danger" type="submit">Entrar</button>
                
            </form>
        </div>
    </div>
@endsection