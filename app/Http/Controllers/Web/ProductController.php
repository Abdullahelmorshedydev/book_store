<?php

namespace App\Http\Controllers\Web;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Favourite;

class ProductController extends Controller
{
    public function all()
    {
        $products = Product::where('status', 'active')->paginate();
        return view('web.products.all', compact('products'));
    }

    public function categoryProducts($id)
    {
        $products = Product::where('category_id', $id)->where('status', 'active')->paginate();
        return view('web.products.category_products', compact('products'));
    }

    public function singleProduct(Product $product)
    {
        $fav = '';
        $is_inCart = false;
        if (auth()->user()) {
            $fav = Favourite::where('user_id', auth()->user()->id)->where('product_id', $product->id)->first();
            $cart = Cart::where('user_id', auth()->user()->id)->where('status', 'carted')->first();
            if (isset($cart)) {
                $cart_item = CartItem::where('cart_id', $cart->id)->first();
                if (isset($cart_item)) {
                    $is_inCart = true;
                }
            }
        }
        return view('web.products.single_product', compact('product', 'fav', 'is_inCart'));
    }
}
