<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Favourite;
use App\Models\Product;

class FavouriteController extends Controller
{
    public function index()
    {
        $favourites = Favourite::where('user_id', auth()->user()->id)->get();
        $products = [];
        foreach($favourites as $favourite) {
            $products[] = Product::findOrFail($favourite->product_id);
        }
        return view('web.favourites', compact('products'));
    }

    public function store($id)
    {
        Favourite::create([
            'user_id' => auth()->user()->id,
            'product_id' => $id,
        ]);
        return back()->with('success', 'product added in favourite list successfully');
    }

    public function delete($id)
    {
        $favourite = Favourite::where('user_id', auth()->user()->id)->where('product_id', $id)->get();
        Favourite::destroy($favourite);
        return back();
    }
}
