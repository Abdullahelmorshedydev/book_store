<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\Admin\ResetPasswordMail;
use App\Http\Requests\Admin\Auth\ResetPasswordRequest;
use App\Http\Requests\Admin\Auth\ForgetPasswordRequest;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    private $email;

    public function index()
    {
        return view('admin.auth.forgetPassword');
    }

    public function send(ForgetPasswordRequest $request)
    {
        $this->email = $request->email;
        Mail::to($request->validated())->send(new ResetPasswordMail($request->email));
        return redirect()->route('admin.auth.login');
    }

    public function update($email)
    {
        $email = $email;
        return view('admin.auth.resetPassword', compact('email'));
    }

    public function reset(ResetPasswordRequest $request)
    {
        User::where('email', $request->email)->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('admin.auth.login');
    }
}
