<?php

namespace App\Http\Controllers\Web;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Web\LoginRequest;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Admin\Auth\RegisterRequest;
use App\Http\Requests\Web\ResetPasswordRequest;
use App\Http\Requests\Web\UpdateAccountRequest;
use Illuminate\Support\Facades\Hash;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class AuthController extends Controller
{
    public function index()
    {
        return view('web.auth.register');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            $user = User::where('email', $credentials['email'])->first();
            auth()->login($user);
            return redirect(LaravelLocalization::setLocale() . RouteServiceProvider::HOME);
        }
        return back()->with('error', __('admin/auth/login.credintial_not_found'));
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());
        Auth::login($user);
        return redirect(app()->currentLocale() . RouteServiceProvider::HOME);
    }

    public function logout()
    {
        auth()->logout();
        return back();
    }

    public function myAccount()
    {
        return view('web.auth.my_acc');
    }

    public function update(UpdateAccountRequest $request)
    {
        User::findOrFail(auth()->user()->id)->update($request->validated());
        return back();
    }

    public function resetPassword(ResetPasswordRequest $request)
    {
        $data = $request->validated();
        User::findOrFail(auth()->user()->id)->update([
            'password' => Hash::make($data['new_pass']),
        ]);
        return back();
    }
}
