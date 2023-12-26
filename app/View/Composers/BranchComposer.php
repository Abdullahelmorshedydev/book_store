<?php

namespace App\View\Composers;

use App\Models\Branch;
use Illuminate\Contracts\View\View;

class BranchComposer
{
    public function compose(View $view): void
    {
        $branches = Branch::where('status', 'active')->get();
        $view->with('branches', $branches);
    }
}
