<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CarrinhoController extends Controller
{
    public function carrinhoLista(){
        $items = Cart::content();
        // Exibe os itens do carrinho
        dd($items);
    }
}
