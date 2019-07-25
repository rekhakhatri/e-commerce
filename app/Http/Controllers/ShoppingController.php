<?php

namespace App\Http\Controllers;

use Cart;
use App\Product;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function add_to_cart()
    {
        //dd(request()->all());

        $pdt = Product::find(request()->pdt_id);

        $cartItem = Cart::add([
            'id'        => $pdt->id,
            'name'   => $pdt->product,
            'qty'       => request()->qty,
            'price'     => $pdt->price
        ]);

        //dd($cart);
        //dd(Cart::content());
        Cart::associate($cartItem->rowId,'App\Product');

        return redirect()->route('cart');
    }

    public function cart()
    {
        //Cart::destroy();
        return view('vendor.cart');
    }

    public function cart_delete($id)
    {
        Cart::remove($id);

        return redirect()->back();
    }

    public function incr($id,$qty)
    {
        Cart::update($id,$qty + 1);
        return redirect()->back();
    }

    public function decr($id,$qty)
    {
        Cart::update($id,$qty - 1);
        return redirect()->back();
    }

    public function rapid_add($id)
    {
          //dd(request()->all());

          $pdt = Product::find($id);

          $cartItem = Cart::add([
              'id'        => $pdt->id,
              'name'   => $pdt->product,
              'qty'       => 1,
              'price'     => $pdt->price
          ]);
  
          //dd($cart);
          //dd(Cart::content());
          Cart::associate($cartItem->rowId,'App\Product');
  
          return redirect()->route('cart');
    }

}
