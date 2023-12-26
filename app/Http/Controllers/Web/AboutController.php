<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return view('web.about_us');
    }
}
