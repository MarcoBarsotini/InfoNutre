@extends('layouts.home_template')

@section('titulo')
    <title> Infonutre | Home </title>
@endsection

@section('content')
<!-- Começo do Body -->
    
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">

            </div>
        </div>
    </section>

    <section class="container border border-opacity-50 rounded-3">
        <div class="item">
            <img src="{{ asset('images/home/delivery2.png') }}"/>
        </div>
        <div class="item">
            <h1 class="fw-semibold fs-1"> Rápido e Eficiente </h1>
            <p> Cansado de pegar filas e ficar esperando sua vez chegar? <br> Com nosso sistema integrado, é possível comprar seus produtos com antecedência.</p>
        </div>
    </section>

    <section class="container border border-opacity-50 rounded-3">
        <div class="item">
            <h1 class="fw-semibold fs-1"> Na porta da sua casa </h1>
            <p> Quer pedir aquele hamburguer, ou sua pizza e receber ela na sua casa? <br> Tranquilo! com nosso sistema de delivery, a gente entrega rapidinho.</p>
        </div>
        <div class="item">
            <img src="{{ asset('images/home/delivery.png') }}"/>
        </div>
    </section>
@endsection