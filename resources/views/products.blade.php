@extends('layouts.carrinho_template')

@section('titulo')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/carrinhocss/products.css') }}">
    <title> Infonutre | cardápio </title>
@endsection

@section('content')
    <div class="container-sm pt-3">
        <div class="">
            @foreach ($products as $product)
            <div class="d-flex justify-content-center container border border-2 rounded">
                <img src="{{ url($product->image) }}" alt="" class="foto_produto">
                <div class="flex items-end justify-end w-full bg-cover">
                    
                </div>
                <div class="px-5 py-3"><br>
                    <h3 class="text-center"><b>{{ $product->name }}</b></h3> <br>
                    <h5 class="text-center">R${{ $product->price }},00</span><br><br>
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->name }}" name="name">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->image }}" class="foto_produto"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button class="btn btn-danger">Adicionar ao Carrinho</button> <br><br><br><br>
                    </form>
                </div>   
            </div>
            @endforeach
        </div>
    </div>
@endsection