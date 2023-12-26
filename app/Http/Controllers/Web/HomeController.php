<?php

namespace App\Http\Controllers\Web;

use App\Models\Slider;
use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $sliders = Slider::where('status', 'active')->get();
        $categories = Category::get();
        $products = Product::where('status', 'active')->get();
        $best_products = Product::where('status', 'active')->orderBy('sales_count', 'ASC')->get();
        $new_products = Product::where('status', 'active')->orderBy('created_at', 'ASC')->get();
        $branches = Branch::where('status', 'active')->get();
        return view('web.index', compact('sliders', 'categories', 'products', 'best_products', 'new_products', 'branches'));
    }
}
