<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\Auth\RegisterRequest;
use App\Providers\RouteServiceProvider;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class RegisterController extends Controller
{
    public function register()
    {
        return view('admin.auth.register');
    }

    public function store(RegisterRequest $request)
    {
        $user = User::create($request->validated());
        Auth::login($user);
        return redirect(RouteServiceProvider::ADMIN);
    }
}
