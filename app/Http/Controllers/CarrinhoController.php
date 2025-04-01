<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CarrinhoController extends Controller
{
    public function carrinhoLista(){
        $itens = Cart::content();
        // dd($itens);
        return view('site.carrinho', compact('itens')); 
    }

    public function adicionaCarrinho(Request $request){
        // dd($request->all());
        $quantity = (int) $request->quantity;
        if ($quantity <= 0) {
            return redirect()->back()->with('error', 'Quantidade inválida.');
        }
        $price = (float) $request->preco;
        if ($price <= 0) {
            return redirect()->back()->with('error', 'Preço inválido.');
        }
        $image = $request->img ? $request->img : null;
        Cart::add(
            
            $request->id, 
            $request->nome, 
            $quantity,   
            $price,
            [
                'image' => $image 
            ]
        );
        return redirect()->route('site.carrinho')->with('success', 'Produto adicionado ao carrinho com sucesso!');
    }
}
