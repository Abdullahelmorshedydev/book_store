<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class PrivacyPolicyController extends Controller
{
    public function __invoke()
    {
        return view('web.privacy_policy');
    }
}
