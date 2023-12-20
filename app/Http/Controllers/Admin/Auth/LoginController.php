<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Admin\Auth\LoginRequest;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function store(LoginRequest $request)
    {
        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            $user = User::where('email', $credentials['email'])->first();
            auth()->login($user);
            return redirect(LaravelLocalization::setLocale() . RouteServiceProvider::ADMIN);
        }
        return back()->with('error', __('admin/auth/login.credintial_not_found'));
    }

    public function logout()
    {
        auth()->logout();
        return back();
    }
}
