@extends('web.layouts.app')

@section('title', settings()->get('site_name_' . app()->currentLocale()))

@push('style')
@endpush

@section('content')
    <!-- Hero Section Start -->
    <section class="section-container hero">
        <div class="owl-carousel hero__carousel owl-theme">
            @foreach ($sliders as $slider)
                <div class="hero__item">
                    <img class="hero__img" src="{{ asset('uploads/sliders/' . $slider->image) }}" alt="">
                </div>
            @endforeach
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Offer Section Start -->
    <section class="section-container mb-5 mt-3">
        <div class="offer d-flex align-items-center justify-content-between rounded-3 p-3 text-white">
            <div class="offer__title fw-bolder">
                عروض اليوم
            </div>
            <div class="offer__time d-flex gap-2 fs-6">
                <div class="d-flex flex-column align-items-center">
                    <span class="fw-bolder">06</span>
                    <div>ساعات</div>
                </div>:
                <div class="d-flex flex-column align-items-center">
                    <span class="fw-bolder">10</span>
                    <div>دقائق</div>
                </div>:
                <div class="d-flex flex-column align-items-center">
                    <span class="fw-bolder">13</span>
                    <div>ثواني</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Offer Section End -->

    <!-- Products Section Start -->
    <section class="section-container mb-4">
        <div class="owl-carousel products__slider owl-theme">
            @foreach ($products as $product)
                <div class="products__item">
                    <div class="product__header mb-3">
                        <a href="{{ route('products.single_product', $product->id) }}">
                            <div class="product__img-cont">
                                <img class="product__img w-100 h-100 object-fit-cover"
                                    src="{{ asset('uploads/products/' . $product->image) }}" data-id="white">
                            </div>
                        </a>
                        <div class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white">
                            {{ __('web/home.save') }} 10%
                        </div>
                        <div
                            class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white">
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                    <div class="product__title text-center">
                        <a class="text-black text-decoration-none" href="single-product.html">
                            {{ $product->name }}
                        </a>
                    </div>
                    <div class="product__author text-center">
                        {{ $product->author }}
                    </div>
                    <div class="product__price text-center d-flex gap-2 justify-content-center flex-wrap">
                        @if ($product->offer_price)
                            <span class="product__price product__price--old">
                                {{ $product->offer_price }} {{ __('web/home.pound') }}
                            </span>
                        @endif
                        <span class="product__price">
                            {{ $product->price }} {{ __('web/home.pound') }}
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- Products Section End -->

    <!-- Categories Section Start -->
    <section class="section-container mb-5">
        <div class="categories row gx-4">
            @foreach ($categories as $category)
                <div class="col-md-6 p-2">
                    <div class="p-4 border rounded-3">
                        <img class="w-100" src="{{ asset('uploads/categories/' . $category->image) }}" alt="">
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Best Sales Section Start -->
    <section class="section-container mb-5">
        <div class="products__header mb-4 d-flex align-items-center justify-content-between">
            <h4 class="m-0">{{ __('web/home.best_seller') }}</h4>
            <button class="products__btn py-2 px-3 rounded-1">{{ __('web/home.shop_now') }}</button>
        </div>
        <div class="owl-carousel products__slider owl-theme">
            @foreach ($best_products as $product)
                <div class="products__item">
                    <div class="product__header mb-3">
                        <a href="{{ route('products.single_product', $product->id) }}">
                            <div class="product__img-cont">
                                <img class="product__img w-100 h-100 object-fit-cover"
                                    src="{{ asset('uploads/products/' . $product->image) }}" data-id="white">
                            </div>
                        </a>
                        <div class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white">
                            {{ __('web/home.save') }} 10%
                        </div>
                        <div
                            class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white">
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                    <div class="product__title text-center">
                        <a class="text-black text-decoration-none" href="single-product.html">
                            {{ $product->name }}
                        </a>
                    </div>
                    <div class="product__author text-center">
                        {{ $product->author }}
                    </div>
                    <div class="product__price text-center d-flex gap-2 justify-content-center flex-wrap">
                        @if ($product->offer_price)
                            <span class="product__price product__price--old">
                                {{ $product->offer_price }} جنيه
                            </span>
                        @endif
                        <span class="product__price">
                            {{ $product->price }} جنيه
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- Best Sales Section End -->

    <!-- Newest Section Start -->
    <section class="section-container mb-5">
        <div class="products__header mb-4 d-flex align-items-center justify-content-between">
            <h4 class="m-0">{{ __('web/home.last_arrived') }}</h4>
            <button class="products__btn py-2 px-3 rounded-1">{{ __('web/home.shop_now') }}</button>
        </div>
        <div class="owl-carousel products__slider owl-theme">
            @foreach ($new_products as $product)
                <div class="products__item">
                    <div class="product__header mb-3">
                        <a href="{{ route('products.single_product', $product->id) }}">
                            <div class="product__img-cont">
                                <img class="product__img w-100 h-100 object-fit-cover"
                                    src="{{ asset('uploads/products/' . $product->image) }}" data-id="white">
                            </div>
                        </a>
                        <div class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white">
                            {{ __('web/home.save') }} 10%
                        </div>
                        <div
                            class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white">
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                    <div class="product__title text-center">
                        <a class="text-black text-decoration-none" href="single-product.html">
                            {{ $product->name }}
                        </a>
                    </div>
                    <div class="product__author text-center">
                        {{ $product->author }}
                    </div>
                    <div class="product__price text-center d-flex gap-2 justify-content-center flex-wrap">
                        @if ($product->offer_price)
                            <span class="product__price product__price--old">
                                {{ $product->offer_price }} {{ __('web/home.pound') }}
                            </span>
                        @endif
                        <span class="product__price">
                            {{ $product->price }} {{ __('web/home.pound') }}
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- Newest Section End -->
@endsection
