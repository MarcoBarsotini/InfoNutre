<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/cardapio', function () {
    return view('cardapio');
});

Route::get('/equipe', function () {
    return view('equipe');
});

Route::get('/503', function () {
    return view('errors/503');
});

Route::get('/504', function () {
    return view('errors/504');
});