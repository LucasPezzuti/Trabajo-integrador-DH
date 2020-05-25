<?php

namespace App\Http\Controllers\Tienda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Categorias, App\Http\Models\Productos;
use App\User;
use Validator, Hash, Auth;


class CarritoControlador extends Controller
{
    public function __construct()
    {
        //array global para el carrito
        if(!\Session::has('cart')) \Session::put('cart', array());
    }

    public function show()
    {
        $cart = \Session::get('cart');
        return view('tienda.cart', compact('cart'));
    }

    public function add(Productos $product)
    {
        $cart = \Session::get('cart');
        $product->quantity = 1;
        $cart[$product->slug] = $product;
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
        
    }

    public function delete(Productos $product)
    {
        $cart = \Session::get('cart');
        unset($cart[$product->slug]);
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }

    public function trash()
    {

        \Session::forget('cart');

        return redirect()->route('cart-show');
    }

    public function update(Productos $product, $quantity)
    {

        $cart = \Session::get('cart');
        $cart[$product->slug]->quantity = $quantity;
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }
}
