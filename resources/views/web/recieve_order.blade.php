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
                <a class="text-gray" href="{{ route('index') }}">{{ __('web/nav.home') }}</a> /
                <span class="text-gray">{{ __('web/nav.my_acc') }}</span>
            </div>
        </div>
    </section>

    <section class="section-container profile my-5 py-5">
        <div class="text-center mb-5">
            <div class="success-gif m-auto">
                <img class="w-100" src="assets/images/success.gif" alt="" />
            </div>
            <h4 class="mb-4">{{ __('web/auth/my_acc.order_in_proccess') }}</h4>
            <p class="mb-1">
                {{ __('web/auth/my_acc.will_call') }}
            </p>
            <p>{{ __('web/auth/my_acc.please_answer') }}</p>
            <button class="primary-button">{{ __('web/auth/my_acc.shopping_again') }}</button>
        </div>
        <div>
            <p>{{ __('web/auth/my_acc.tanks') }}</p>
            <div class="d-flex flex-wrap gap-2">
                <div class="success__details">
                    <p class="success__small">{{ __('web/auth/my_acc.order_id') }}:</p>
                    <p class="fw-bolder">{{ $order->id }}</p>
                </div>
                <div class="success__details">
                    <p class="success__small">{{ __('web/contact.email_label') }}:</p>
                    <p class="fw-bolder">{{ $order->email }}</p>
                </div>
                <div class="success__details">
                    <p class="success__small">{{ __('web/checkout.amout') }}:</p>
                    <p class="fw-bolder">{{ $cart->total }} {{ __('web/home.pound') }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-container">
        <h2>{{ __('web/auth/my_acc.order_details') }}</h2>
        <table class="success__table w-100 mb-5">
            <thead>
                <tr class="border-0 bg-main text-white">
                    <th>{{ __('web/checkout.product') }}</th>
                    <th class="d-none d-md-table-cell">{{ __('web/checkout.amout') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    @foreach ($cart_items as $cart_item)
                        @if ($cart_item->product_id == $product->id)
                            <tr>
                                <td>
                                    <div>
                                        <a href="{{ route('products.single_product', $product->id) }}">
                                            {{ $product->name }}, {{ $product->price }}
                                        </a>
                                        x {{ $cart_item->quantity }}
                                    </div>
                                </td>
                                <td>
                                    {{ $product->price * $cart_item->quantity }}
                                    {{ __('web/home.pound') }}
                                </td>
                            </tr>
                        @endif
                    @endforeach
                @endforeach
                <tr>
                    <th>{{ __('web/checkout.amout') }}:</th>
                    <td class="fw-bolder">{{ $cart->total }} {{ __('web/home.pound') }}</td>
                </tr>
                <tr>
                    <th>{{ __('web/checkout.tax') }}:</th>
                    <td class="fw-bolder">{{ settings()->get('tax') }} %</td>
                </tr>
                <tr>
                    <th>{{ __('web/checkout.total') }}:</th>
                    <td class="fw-bold">
                        {{ $cart->total + (settings()->get('tax') * $cart->total) / 100 }}
                        {{ __('web/home.pound') }}
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
    <section class="section-container mb-5">
        <h2>{{ __('web/auth/my_acc.shipping_details') }}</h2>
        <div class="border p-3 rounded-3">
            <p class="mb-1">{{ $order->first_name }} {{ $order->last_name }}</p>
            <p class="mb-1">{{ $order->address }}</p>
            <p class="mb-1">{{ $order->phone }}</p>
            <p class="mb-1">{{ $order->email }}</p>
        </div>
    </section>
@endsection
