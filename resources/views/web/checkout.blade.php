@extends('web.layouts.app')

@section('title', settings()->get('site_name_' . app()->currentLocale()))

@push('style')
@endpush

@section('content')
    <section class="page-top d-flex justify-content-center align-items-center flex-column text-center">
        <div class="page-top__overlay"></div>
        <div class="position-relative">
            <div class="page-top__title mb-3">
                <h2>{{ __('web/checkout.complete_order') }}</h2>
            </div>
            <div class="page-top__breadcrumb">
                <a class="text-gray" href="{{ route('index') }}">{{ __('web/nav.home') }}</a> /
                <span class="text-gray">{{ __('web/checkout.complete_order') }}</span>
            </div>
        </div>
    </section>

    <section class="section-container my-5 py-5 d-lg-flex">
        @if (isset($cart))
            <div class="checkout__form-cont w-50 px-3 mb-5">
                <h4>{{ __('web/checkout.invoice') }}</h4>
                <form class="checkout__form" action="{{ route('order.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="cart_id" value="{{ $cart->id }}">
                    <div class="d-flex gap-3 mb-3">
                        <div class="w-50">
                            <label for="first-name">{{ __('web/checkout.first_name') }}<span
                                    class="required">*</span></label>
                            <input name="first_name" value="{{ old('first_name') }}" class="form__input" type="text"
                                id="first-name" />
                            @error('first_name')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="w-50">
                            <label for="last-name">{{ __('web/checkout.last_name') }}<span
                                    class="required">*</span></label>
                            <input name="last_name" value="{{ old('last_name') }}" class="form__input" type="text"
                                id="last-name" />
                            @error('last_name')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="last-name">{{ __('web/checkout.address') }}
                            <span class="required">*</span></label>
                        <input name="address" value="{{ old('address') }}" class="form__input" type="text"
                            id="last-name" />
                        @error('address')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phone">{{ __('web/checkout.phone') }}<span class="required">*</span></label>
                        <input name="phone" value="{{ old('phone') }}" class="form__input" type="text"
                            id="phone" />
                        @error('phone')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email">{{ __('web/checkout.email') }}<span class="required">*</span></label>
                        <input name="email" value="{{ old('email') }}" class="form__input" type="email"
                            id="email" />
                        @error('email')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="last-name">{{ __('web/checkout.notes') }} ({{ __('web/checkout.optional') }})</label>
                        <textarea name="notes" class="form__input" type="text" id="last-name">{{ old('notes') }}</textarea>
                    </div>
                    <button type="submit" class="primary-button w-100 py-2">{{ __('web/checkout.checkout') }}</button>
                </form>
            </div>
            <div class="checkout__order-details-cont w-50 px-3">
                <h4>{{ __('web/checkout.your_order') }}</h4>
                <div>
                    <table class="w-100 checkout__table">
                        <thead>
                            <tr class="border-0">
                                <th>{{ __('web/checkout.product') }}</th>
                                <th>{{ __('web/checkout.amout') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                @foreach ($cart_items as $cart_item)
                                    @if ($cart_item->product_id == $product->id)
                                        <tr>
                                            <td>{{ $product->name }}, {{ $product->price }} × {{ $cart_item->quantity }}
                                            </td>
                                            <td>
                                                <div class="product__price text-center d-flex gap-2 flex-wrap">
                                                    <span class="product__price product__price--old">
                                                        {{ $product->offer_price * $cart_item->quantity }}
                                                        {{ __('web/home.pound') }}
                                                    </span>
                                                    <span class="product__price">
                                                        {{ $product->price * $cart_item->quantity }}
                                                        {{ __('web/home.pound') }} </span>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endforeach
                            <tr>
                                <th>{{ __('web/checkout.amout') }}</th>
                                <td class="fw-bolder">{{ $cart->total }} {{ __('web/home.pound') }}</td>
                            </tr>
                            <tr class="bg-green">
                                <th>{{ __('web/checkout.tax') }}</th>
                                <td class="fw-bolder">{{ settings()->get('tax') ? settings()->get('tax') : 0 }} %</td>
                            </tr>
                            <tr>
                                <th>{{ __('web/checkout.total') }}</th>
                                <td class="fw-bolder">
                                    {{ $cart->total + (settings()->get('tax') * $cart->total) / 100 }}
                                    {{ __('web/home.pound') }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="checkout__payment py-3 px-4 mb-3">
                    <p class="m-0 fw-bolder">{{ __('web/checkout.cash_on_delevired') }}</p>
                </div>
            </div>
        @else
        <div class="text-info">no data in your cart</div>
        @endif
    </section>
@endsection
