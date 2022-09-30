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



    <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="contatomodal" aria-labelledby="contatomodal">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Contato</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                <img src="{{ asset('images/home/ajuda.svg') }}" class="rounded mx-auto d-block" alt="Pessoas conversando"/>
                <h4 class="text-center"> Algum problema? </h4> 
                <h6 class="text-center"> Ficaremos felizes em resolver! </h6>
                <br> <br> 
            </div>
            <div>
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label"> Seu Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descreva seu problema / Dúvida</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>De onde é?</option>
                        <option value="2">Sou um cliente</option>
                        <option value="1">Sou uma Empresa</option>
                    </select> <br>
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Anexo <b>(Opcional)</b></label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-danger">Enviar</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>


<!-- Começo do Rodapé --> 

    <div class="rodape">
        <p class="textos"> © 2022 Copyright by <a class="link_rodape" href="#">InfoNutre</a> - Todos os direitos reservados.</p>
    </div>
    
@endsection