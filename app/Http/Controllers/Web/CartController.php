<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;

class CartController extends Controller
{
    public function addToCart($id)
    {
        $product = Product::findOrFail($id)->first();
        $cart = Cart::where('user_id', auth()->user()->id)->where('status', 'carted')->first();
        if (!isset($cart)) {
            $cart = Cart::create([
                'user_id' => auth()->user()->id,
            ]);
        }
        $cart_item = CartItem::where('cart_id', $cart->id)->where('product_id', $product->id)->first();
        if (!isset($cart_item)) {
            $cart_item = CartItem::create([
                'cart_id' => $cart->id,
                'product_id' => $product->id,
            ]);
        } else {
            $cart_item->update([
                'quantity' => $cart_item->quantity + 1,
            ]);
        }
        $cart->update([
            'total' => $cart->total + $product->price,
        ]);
        return back();
    }

    public function deleteItem($id)
    {
        $cart = Cart::where('user_id', auth()->user()->id)->where('status', 'carted')->first();
        $cart_item = CartItem::where('cart_id', $cart->id)->where('product_id', $id)->first();
        $cart_item->delete();
        $cart->update([
            'total' => 0,
        ]);
        return back();
    }
}
