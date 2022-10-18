@extends('layouts.carrinho_template')

@section('titulo')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/carrinhocss/cart.css') }}">
    <title> Infonutre | Carrinho </title>
@endsection

@section('content')

<!-- Seção de usuários que estão Logados -->
  @auth
      <div class="container-md pt-3">
          <div class="flex justify-center my-6">
              <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                @if ($message = Session::get('success'))
                    <div class="alert alert-danger text-center" role="alert">
                        <p class="text-green-800">{{ $message }}</p>
                    </div>
                @endif
                <br>
                <h3 class="text-bold text-center"> <b>Seu Carrinho</b> </h3> 
                <div><br><br><hr> 
                  <table class="w-full text-sm lg:text-base" cellspacing="0">
                    <thead>
                      <tr class="h-12 uppercase">
                        <th class="hidden md:table-cell"></th>
                        <th class="text-left">Nome</th>
                        <th class="pl-5 text-left lg:text-right lg:pl-0">
                          <span class="hidden lg:inline">Quantidade</span>
                        </th>
                        <th class="hidden text-right md:table-cell"> Preço</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartItems as $item)
                      <tr>
                        <td>
                          <h5 href="#">
                            
                          </h5>
                        </td>
                        <td class="hidden pb-4 md:table-cell">
                          <a href="#">
                            <p> {{ $item->name }} </p>
                            <img src="{{ $item->attributes->image }}" class="rounded imagem_produto" alt="Imagem Produto">
                          </a>
                        </td>
                        <td class="justify-center mt-6 md:justify-end md:flex">
                          <div class="h-10 w-28">
                            <div class="relative flex flex-row w-full h-8">
                              
                              <form action="{{ route('cart.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id}}" >
                              <input type="number" name="quantity" value="{{ $item->quantity }}" 
                                class="w-6 text-center bg-gray-300" />
                              <button type="submit" class="btn btn-warning">Atualizar</button>
                              </form>
                            </div>
                          </div>
                        </td>
                        <td class="hidden text-right md:table-cell">
                          <span class="text-sm font-medium lg:text-base">
                              ${{ $item->price }}
                          </span>
                        </td>
                        <td class="hidden text-right md:table-cell">
                          <form action="{{ route('cart.remove') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $item->id }}" name="id">
                            <button class="btn btn-danger">x</button>
                        </form>   
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <hr>
                  <div class="d-flex justify-content-center">
                    <h4> <b>Total: ${{ Cart::getTotal() }},00</b> </h4>
                  </div>
                  <div class="d-flex justify-content-evenly">
                    <form action="{{ route('cart.clear') }}" method="POST">
                      @csrf
                      <button class="btn btn-danger">Remover Tudo</button>
                    </form>
                  <div class="d-flex justify-content-evenly">
                    <form action="{{ route('cart.confirm') }}" method="POST">
                      @csrf
                      <button class="btn btn-success">Concluir o Pedido</button>
                    </form>
                  </div></div><br>
                </div>
              </div>
            </div>
      </div>
  @endauth


<!-- Seção de usuários não Logados -->
  @guest
    <div class="d-flex justify-content-center container border">
      <div>

        <h1 class="text-dark titulo_guest text-center"> Você deve estar logado para ver seu carrinho! </h1>

        <div class="d-flex justify-content-evenly">
          <a type="button" href="{{url('/login')}}" class="btn btn-primary">Entrar</a>
          <a type="button" href="{{url('/register')}}" class="btn btn-danger">Criar Conta</a>
        </div><br>

      </div>
    </div>
  @endguest
<!-- Seção de usuários não Logados -->

@endsection