<?php

namespace App\View\Composers;

use App\Models\Favourite;
use Illuminate\Contracts\View\View;

class CountsComposer
{
    public function compose(View $view): void
    {
        // $count_favourites = Favourite::where('user_id', auth()->user()->id);
        // // $count_cart = 
        // $view->with();
    }
}
