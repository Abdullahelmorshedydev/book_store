<?php

namespace App\View\Composers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Favourite;
use Illuminate\Contracts\View\View;

class CountsComposer
{
    public function compose(View $view): void
    {
        $cart_items = [];
        $favourites = [];
        if (auth()->user()) {
            $cart = Cart::where('user_id', auth()->user()->id)->where('status', 'carted')->first();
            if (isset($cart)) {
                $cart_items = CartItem::where('cart_id', $cart->id)->get();
            }
            $favourites = Favourite::where('user_id', auth()->user()->id)->get();
        }
        $cart_count = count($cart_items);
        $fav_count = count($favourites);
        $view->with('cart_count', $cart_count)
            ->with('fav_count', $fav_count);
    }
}
