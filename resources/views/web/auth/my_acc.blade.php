@extends('web.layouts.app')

@section('title', settings()->get('site_name_' . app()->currentLocale()))

@push('style')
@endpush

@section('content')
    <section class="page-top d-flex justify-content-center align-items-center flex-column text-center">
        <div class="page-top__overlay"></div>
        <div class="position-relative">
            <div class="page-top__title mb-3">
                <h2>{{ __('web/nav.my_acc') }}</h2>
            </div>
            <div class="page-top__breadcrumb">
                <a class="text-gray" href="index.html">{{ __('web/nav.home') }}</a> /
                <span class="text-gray">{{ __('web/nav.my_acc') }}</span>
            </div>
        </div>
    </section>

    <section class="section-container profile my-3 my-md-5 py-5 d-md-flex gap-5">
        <div class="profile__right">
            <div class="profile__user mb-3 d-flex gap-3 align-items-center">
                <div class="profile__user-img rounded-circle overflow-hidden">
                    <img class="w-100" src="{{ asset('web/assets/images/user.png') }}" alt="" />
                </div>
                <div class="profile__user-name">{{ auth()->user()->name }}</div>
            </div>
            <ul class="profile__tabs list-unstyled ps-3">
                <li class="profile__tab">
                    <a class="py-2 px-3 text-black text-decoration-none"
                        href="{{ route('order.all_orders') }}">{{ __('web/auth/my_acc.orders') }}</a>
                </li>
                <li class="profile__tab active">
                    <a class="py-2 px-3 text-black text-decoration-none"
                        href="{{ route('auth.my_acc') }}">{{ __('web/nav.my_acc') }}</a>
                </li>
                <li class="profile__tab">
                    <a class="py-2 px-3 text-black text-decoration-none"
                        href="{{ route('favourites.index') }}">{{ __('web/nav.favourite') }}</a>
                </li>
                <li class="profile__tab">
                    <form action="{{ route('auth.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-info">
                            {{ __('web/nav.logout') }}
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        <div class="profile__left mt-4 mt-md-0 w-100">
            <div class="profile__tab-content active">
                <form class="profile__form border p-3" action="{{ route('auth.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="w-100 mb-3">
                        <label class="fw-bold mb-2" for="name">
                            {{ __('web/contact.name_label') }} <span class="required">*</span>
                        </label>
                        <input name="name" value="{{ old('name', auth()->user()->name) }}" type="text"
                            class="form__input" id="name" />
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-100 mb-3">
                        <label class="fw-bold mb-2" for="email">
                            {{ __('web/contact.email_label') }} <span class="required">*</span>
                        </label>
                        <input name="email" value="{{ old('email', auth()->user()->email) }}" type="email"
                            class="form__input" id="email" />
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="primary-button">{{ __('admin/category/edit.submit') }}</button>
                </form>
                <form action="{{ route('auth.reset_password') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <fieldset>
                        <legend class="fw-bolder">{{ __('web/auth/my_acc.update_pass_label') }}</legend>
                        <div class="w-100 mb-3">
                            <label class="fw-bold mb-2" for="current_pass">
                                {{ __('web/auth/my_acc.current_pass') }}
                            </label>
                            <input name="current_pass" type="password" class="form__input" id="current_pass" />
                            @error('current_pass')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="w-100 mb-3">
                            <label class="fw-bold mb-2" for="new_pass">
                                {{ __('web/auth/my_acc.new_pass') }}
                            </label>
                            <input name="new_pass" type="password" class="form__input" id="new_pass" />
                            @error('new_pass')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="w-100 mb-3">
                            <label class="fw-bold mb-2" for="new_pass_confirmation">
                                {{ __('web/auth/my_acc.new_pass_confirmation') }}
                            </label>
                            <input name="new_pass_confirmation" type="password" class="form__input"
                                id="new_pass_confirmation" />
                            @error('new_pass_confirmation')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit"
                            class="primary-button">{{ __('web/auth/my_acc.update_pass_label') }}</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>
@endsection
