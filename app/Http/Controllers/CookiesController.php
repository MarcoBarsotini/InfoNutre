<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookiesController extends Controller
{
    public function setCookie() {
        return response()->json(['Cookie Criado.'])->cookie(
            'CookieTeste', 'Teste de cookies', 120
        );
    }

    public function getCookie(Request $request) {
        $value = Cookie::get('CookieTeste');
        //dd($value);
    }
}
