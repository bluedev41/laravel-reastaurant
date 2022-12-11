<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function test() {
        Cart::add('2', 'Product 3', 40, 10.66);
    }

    public function retrieve() {
        $cart = Cart::content();
        foreach ($cart as $product) {
            echo $product->rowId."<br>";
        }
        echo Cart::subtotal();
        dd($cart);
    }
}
