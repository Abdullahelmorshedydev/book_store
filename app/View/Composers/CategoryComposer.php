<?php

namespace App\View\Composers;

use App\Models\Category;
use Illuminate\Contracts\View\View;

class CategoryComposer
{
    public function compose(View $view): void
    {
        $categories = Category::where('status', 'active')->get();
        $view->with('categories', $categories);
    }
}
