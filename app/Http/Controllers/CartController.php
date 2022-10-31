<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartList()
    {
        if (Auth::check()) {
            $cartItems = \Cart::getContent();
            return view('cart', compact('cartItems'));
        }
        else {
            return redirect()->route('login.show');
        }
    }


    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);
        session()->flash('success', 'Produto adicionado !');

        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Carrinho atualizado !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Removido do carrinho !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'Todos os itens Excluidos !');

        return redirect()->route('cart.list');
    }

    public function confirmarCart()
    {
        \Cart::clear();

        session()->flash('success', 'Seu pedido está sendo processado!');

        return redirect()->route('cart.list');
    }
}