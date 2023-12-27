<?php

namespace App\View\Composers;

use App\Models\Cart;
use App\Models\Favourite;
use Illuminate\Contracts\View\View;

class CountsComposer
{
    public function compose(View $view): void
    {
        $products = [];
        $favourites = [];
        if(auth()->user()) {
            $products = Cart::where('user_id', auth()->user()->id)->get();
            $favourites = Favourite::where('user_id', auth()->user()->id)->get();
        }
        $cart_count = count($products);
        $fav_count = count($favourites);
        $view->with('cart_count', $cart_count)
            ->with('fav_count', $fav_count);
    }
}
