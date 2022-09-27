@extends('layouts.app-master')

@section('content')
<!-- Começo do Body -->
    
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">

            </div>
        </div>
    </section>

    @auth
    <section class="container border border-opacity-50 rounded-3">
        <div class="item">
            <img src="{{ asset('images/home/delivery2.png') }}"/>
        </div>
        <div class="item">
            <h1 class="fw-semibold fs-1"> Rápido e Eficiente </h1>
            <p> Cansado de pegar filas e ficar esperando sua vez chegar? <br> Com nosso sistema integrado, é possível comprar seus produtos com antecedência.</p>
        </div>
    </section>
    @endauth

    @guest
    <section class="container border border-opacity-50 rounded-3">
        <div class="item">
            <h1 class="fw-semibold fs-1"> Na porta da sua casa </h1>
            <p> Quer pedir aquele hamburguer, ou sua pizza e receber ela na sua casa? <br> Tranquilo! com nosso sistema de delivery, a gente entrega rapidinho.</p>
        </div>
        <div class="item">
            <img src="{{ asset('images/home/delivery.png') }}"/>
        </div>
    </section>
    @endguest


    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Contato</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                Tem algum problema ou sugestão? Sinta-se livre para nos enviar uma mensagem!
            </div>
            
        </div>
    </div>


<!-- Começo do Rodapé --> 

    <div class="rodape">
        <p class="textos"> © 2022 Copyright by <a class="link_rodape" href="#">InfoNutre</a> - Todos os direitos reservados.</p>
    </div>
    
@endsection