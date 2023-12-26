@extends('web.layouts.app')

@section('title', settings()->get('site_name_' . app()->currentLocale()))

@push('style')
@endpush

@section('content')
    <div class="page-top d-flex justify-content-center align-items-center flex-column text-center">
        <div class="page-top__overlay"></div>
        <div class="position-relative">
            <div class="page-top__title mb-3">
                <h2>{{ __('web/auth/register.my_acc') }}</h2>
            </div>
            <div class="page-top__breadcrumb">
                <a class="text-gray" href="index.html">{{ __('web/auth/register.home') }}</a> /
                <span class="text-gray">{{ __('web/auth/register.my_acc') }}</span>
            </div>
        </div>
    </div>

    <div class="page-full pb-5">
        <div class="account account--login mt-5 pt-5">
            <div class="account__tabs w-100 d-flex mb-3">
                <div class="account__tab account__tab--login text-center fs-6 py-3 w-50">
                    {{ __('web/auth/register.login') }}
                </div>
                <div class="account__tab account__tab--register text-center fs-6 py-3 w-50">
                    {{ __('web/auth/register.new_acc') }}
                </div>
            </div>
            <div class="account__login w-100">
                <form class="mb-5" action="{{ route('auth.login') }}" method="POST">
                    @csrf
                    <div class="input-group rounded-1 mb-3">
                        <input type="email" name="email" class="form-control p-3" aria-label="Email"
                            aria-describedby="basic-addon1" />
                        <span class="input-group-text login__input-icon" id="basic-addon1">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                    </div>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="input-group rounded-1 mb-3">
                        <input type="password" name="password" class="form-control p-3" aria-label="Password"
                            aria-describedby="basic-addon1" />
                        <span class="input-group-text login__input-icon" id="basic-addon1">
                            <i class="fa-solid fa-key"></i>
                        </span>
                    </div>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    {{-- <div class="login__bottom d-flex justify-content-between mb-3">
                        <a class="login__forget-btn" href="">{{ __('web/auth/register.forget_pass') }}</a>
                        <div>
                            <input type="checkbox" />
                            <label for="">{{ __('web/auth/register.remember') }}</label>
                        </div>
                    </div> --}}
                    <button type="submit" class="text-center fs-6 py-2 w-100 bg-black text-white border-0 rounded-1">
                        {{ __('web/auth/register.login') }}
                    </button>
                </form>
            </div>
            <div class="account__register w-100">
                <form class="mb-5" action="{{ route('auth.register') }}" method="POST">
                    @csrf
                    <div class="input-group rounded-1 mb-3">
                        <input type="text" name="name" class="form-control p-3" aria-label="name"
                            aria-describedby="basic-addon1" />
                        <span class="input-group-text login__input-icon" id="basic-addon1">
                            <i class="fa-solid fa-user"></i>
                        </span>
                    </div>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="input-group rounded-1 mb-3">
                        <input type="email" name="email" class="form-control p-3" aria-label="Email"
                            aria-describedby="basic-addon1" />
                        <span class="input-group-text login__input-icon" id="basic-addon1">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                    </div>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="input-group rounded-1 mb-3">
                        <input type="password" name="password" class="form-control p-3" aria-label="Password"
                            aria-describedby="basic-addon1" />
                        <span class="input-group-text login__input-icon" id="basic-addon1">
                            <i class="fa-solid fa-key"></i>
                        </span>
                    </div>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <div class="input-group rounded-1 mb-3">
                        <input type="password" name="password_confirmation" class="form-control p-3"
                            aria-label="Password_Confirmation" aria-describedby="basic-addon1" />
                        <span class="input-group-text login__input-icon" id="basic-addon1">
                            <i class="fa-solid fa-key"></i>
                        </span>
                    </div>
                    @error('password_confirmation')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="text-center fs-6 py-2 w-100 bg-black text-white border-0 rounded-1">
                        {{ __('web/auth/register.new_acc') }}
                    </button>
                </form>
            </div>
            {{-- <div class="account__forget">
                <p>
                    {{ __('web/auth/register.forget_label') }}
                </p>
                <form action="">
                    <div class="input-group rounded-1 mb-3">
                        <input type="email" name="email" class="form-control p-3" aria-label="Username"
                            aria-describedby="basic-addon1" />
                        <span class="input-group-text login__input-icon" id="basic-addon1">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                    </div>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <button class="text-center fs-6 py-2 w-100 bg-black text-white border-0 rounded-1">
                        {{ __('web/auth/register.reset_pass') }}
                    </button>
                </form>
            </div> --}}
        </div>
    </div>
@endsection
