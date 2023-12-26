<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Favourite;

class FavouriteController extends Controller
{
    public function index()
    {
        $favourites = Favourite::where('user_id', auth()->user()->id)->get();
        return view('web.favourites', compact('favourites'));
    }
}
