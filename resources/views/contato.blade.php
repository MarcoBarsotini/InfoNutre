@extends('home_template')

@section('conteudo_body')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contatocss/contato.css') }}">
    <div class="d-flex justify-content-center align-items-center">
        <div class="escrita">
            <div class="titulo">
                <h1> Algum problema? </h1>
            </div>
            <div>
                <span> Ficaremos felizes em te ajudar! <br> preencha </span>
            </div>
        </div>
        <form>
            <div class="mb-3">
                <label for="email" class="form-label"> Seu Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descreva seu problema / Dúvida</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Sou cliente
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Sou de uma empresa
                </label> 
            </div> <br>
            <div class="mb-3">
                <label for="formFileSm" class="form-label">Anexo <b>(Opcional)</b></label>
                <input class="form-control form-control-sm" id="formFileSm" type="file">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@stop