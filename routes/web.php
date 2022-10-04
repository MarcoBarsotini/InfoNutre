<?php

use Illuminate\Support\Facades\Route;



// --------ROTAS MAIS IMPORTANTES *NÃO MEXER --------
                //Rotas de Autenticação

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Rota da Home
     */
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Rotas de Registro
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Rotas de Login
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Rotas de Logout
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});


//Rotas do carrinho de compras
Route::get('cardapio', [App\Http\Controllers\ProductController::class, 'productList'])->name('products.list');
Route::get('cart', [App\Http\Controllers\CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [App\Http\Controllers\CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [App\Http\Controllers\CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [App\Http\Controllers\CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [App\Http\Controllers\CartController::class, 'clearAllCart'])->name('cart.clear');


//Algumas outras rotas adicionais
Route::get('/equipe', function () {
    return view('equipe');
});

Route::get('/503', function () {
    return view('errors/503');
});

Route::get('/500', function () {
    return view('errors/500');
});

Route::get('/504', function () {
    return view('errors/504');
});