<?php

namespace App\View\Composers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Contracts\View\View;

class CartComposer
{
    public function compose(View $view): void
    {
        $products = [];
        $cart = [];
        if (auth()->user()) {
            $cart = Cart::where('user_id', auth()->user()->id)->where('status', 'carted')->first();
            if (isset($cart)) {
                $cart_items = CartItem::where('cart_id', $cart->id)->get();
                foreach ($cart_items as $cart_item) {
                    $products[] = Product::findOrFail($cart_item->product_id)->first();
                }
            }
        }
        $view->with('products', $products)
            ->with('cart', $cart);
    }
}
