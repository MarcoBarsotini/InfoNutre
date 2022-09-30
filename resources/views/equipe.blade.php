@extends('layouts.home_template')

@section('titulo')
    <title> Infonutre | Equipe </title>
@endsection

@section('content')

        <link rel="stylesheet" type="text/css" href="{{ asset('css/equipecss/equipe.css') }}">

                <br><br><br><br>

        
        
        <div class="box">
            <div class="card">
                <div class="imgBx">
                <img src="{!! asset('images/equipe/marco.png') !!}">
                </div>
                <div class="details">
                    <h2>Marco Barsotini<br><span>CEO - FullStack Developer</span></h2>
                </div>
            </div>

            <div class="card">
                <div class="imgBx">
                <img src="{!! asset('images/equipe/heloisa.png') !!}">
                </div>
                <div class="details">
                    <h2>Heloísa Mangaba Coletti<br><span>CEO - FrontEnd Developer</span></h2>
                </div>
            </div>
            
            <div class="card">
                <div class="imgBx">
                <img src="{!! asset('images/equipe/eduardo.png') !!}">
                </div>
                <div class="details">
                    <h2>Eduardo Borges<br><span>CEO - Designer</span></h2>
                </div>
            </div>

            <div class="card">
                <div class="imgBx">
                <img src="{!! asset('images/equipe/aline.png') !!}">
                </div>
                <div class="details">
                    <h2>Aline Favalli<br><span>CEO - Database Management</span></h2>
                </div>
            </div>

            <div class="card">
                <div class="imgBx">
                <img src="{!! asset('images/equipe/raissa.png') !!}">
                </div>
                <div class="details">
                    <h2>Raissa Gomes<br><span>CEO - Director</span></h2>
                </div>
            </div>
        </div>
@stop