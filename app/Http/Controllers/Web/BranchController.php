<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Branch;

class BranchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $branches = Branch::where('status', 'active')->get();
        return view('web.branches', compact('branches'));
    }
}
