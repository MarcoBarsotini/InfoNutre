@extends('layouts.carrinho_template')

@section('titulo')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/carrinhocss/cart.css') }}">
    <title> Infonutre | Carrinho </title>
@endsection

@section('content')

<!-- Seção de usuários que estão Logados -->
  @auth
    <main class="my-8">
      <div class="container">
          <div class="flex justify-center my-6">
              <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                @if ($message = Session::get('success'))
                    <div class="p-4 mb-3 bg-green-400 rounded">
                        <p class="text-green-800">{{ $message }}</p>
                    </div>
                @endif
                
                <h3 class="text-3xl text-bold">Seu Carrinho</h3>
                <div class="flex-1">
                  <table class="w-full text-sm lg:text-base" cellspacing="0">
                    <thead>
                      <tr class="h-12 uppercase">
                        <th class="hidden md:table-cell"></th>
                        <th class="text-left">Nome</th>
                        <th class="pl-5 text-left lg:text-right lg:pl-0">
                          <span class="lg:hidden" title="Quantity">Qtd</span>
                          <span class="hidden lg:inline">Quantidade</span>
                        </th>
                        <th class="hidden text-right md:table-cell"> Preço</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartItems as $item)
                      <tr>
                        <td class="hidden pb-4 md:table-cell">
                          <a href="#">
                            <img src="{{ $item->attributes->image }}" class="w-20 rounded" alt="Thumbnail">
                          </a>
                        </td>
                        <td>
                          <a href="#">
                            <p class="mb-2 md:ml-4">{{ $item->name }}</p>
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
                            <button class="px-4 py-2 text-white bg-red-600">x</button>
                        </form>
                          
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <div>
                    Total: ${{ Cart::getTotal() }}
                  </div>
                  <div>
                    <form action="{{ route('cart.clear') }}" method="POST">
                      @csrf
                      <button class="btn btn-danger">Remover Tudo</button>
                    </form>
                  </div>


                </div>
              </div>
            </div>
      </div>
  </main>
  @endauth


<!-- Seção de usuários não Logados -->
  @guest

    <div class="d-flex justify-content-center">

      <div>

        <h1 class="titulo_guest"> Você deve estar logado para ver seu carrinho! </h1>
        
      </div>

    </div>

  @endguest
@endsection