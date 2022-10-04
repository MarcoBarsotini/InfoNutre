@extends('layouts.auth_template')

@section('titulo')
<link rel="stylesheet" type="text/css" href="{{ asset('css/authcss/register.css') }}">
    <title> Infonutre | Registrar </title>
@endsection


@section('content')
    <div class="d-flex justify-content-center">
        <div class="formulario">
            <form method="post" action="{{ route('register.perform') }}">

                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                
                <img src="{{ asset('images/logo_in.png') }}" href="/"/>

                <div class="form-group form-floating mb-3">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
                    <label for="floatingEmail">Email</label>
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="form-group form-floating mb-3">
                    <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                    <label for="floatingName">Usuário</label>
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

                <div class="form-group form-floating mb-3">
                    <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
                    <label for="floatingConfirmPassword">Confirmar Senha</label>
                    @if ($errors->has('password_confirmation'))
                        <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                </div>
                <button class="w-100 btn btn-lg btn-danger" type="submit">Criar Conta</button>
            </form>
        </div>
    </div>
@endsection