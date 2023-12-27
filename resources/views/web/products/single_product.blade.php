@extends('web.layouts.app')

@section('title', settings()->get('site_name_' . app()->currentLocale()))

@push('style')
@endpush

@section('content')
    <!-- Product details Start -->
    <section class="section-container my-5 pt-5 d-md-flex gap-5">
        <div class="single-product__img w-100" id="main-img">
            <img src="{{ asset('uploads/products/' . $product->image) }}" alt="">
        </div>
        <div class="single-product__details w-100 d-flex flex-column justify-content-between">
            <div>
                <h4>{{ $product->name }}</h4>
                <div class="product__author">{{ $product->author }}</div>
                <div class="product__author">{{ $product->pages }} صفحة</div>
                <div class="product__price mb-3 text-center d-flex gap-2">
                    @if ($product->offer_price != null)
                        <span class="product__price product__price--old fs-6 ">
                            {{ $product->offer_price }} {{ __('web/home.save') }}
                        </span>
                    @endif
                    <span class="product__price fs-5">
                        {{ $product->price }} {{ __('web/home.save') }}
                    </span>
                </div>
                @if (!$is_inCart)
                    <form action="{{ route('cart.add.to.cart', $product->id) }}" method="POST">
                        <div class="d-flex w-100 gap-2 mb-3">
                            @csrf
                            <button type="submit" class="single-product__add-to-cart primary-button w-100">
                                {{ __('web/home.add_to_cart') }}
                            </button>
                        </div>
                    </form>
                @else
                    <form action="{{ route('cart.delete.item', $product->id) }}" method="POST">
                        <div class="d-flex w-100 gap-2 mb-3">
                            @csrf
                            <button type="submit" class="single-product__add-to-cart primary-button w-100">
                                {{ __('web/home.remove_from_cart') }}
                            </button>
                        </div>
                    </form>
                @endif
                @auth
                    @if (empty($fav))
                        <div class="single-product__favourite d-flex align-items-center gap-2 mb-4">
                            <a href="{{ route('favourites.store', $product->id) }}">
                                <i class="fa-regular fa-heart"></i>
                                {{ __('web/home.add_to_fav') }}</a>
                        </div>
                    @else
                        <div class="single-product__favourite d-flex align-items-center gap-2 mb-4">
                            <a href="{{ route('favourites.delete', $product->id) }}">
                                <i class="fa-regular fa-heart"></i>
                                {{ __('web/home.delete_from_fav') }}
                            </a>
                        </div>
                    @endif
                @endauth
            </div>
        </div>
    </section>
    <!-- Product details End -->

    <!-- Description and questions Start -->
    <section class="section-container">
        <nav class="mb-0 ">
            <div class="nav nav-tabs single-product__nav pb-0 gap-2" id="nav-tab" role="tablist">
                <button class="single-product__tab nav-link active" id="single-product__describtion-tab"
                    data-bs-toggle="tab" data-bs-target="#nav-description" type="button" role="tab"
                    aria-controls="nav-home" aria-selected="true">
                    {{ __('web/home.description') }}
                </button>
            </div>
        </nav>
        <div class="tab-content pt-4" id="nav-tabContent">
            <div class="tab-pane show active" id="nav-description" role="tabpanel"
                aria-labelledby="single-product__describtion-tab" tabindex="0">
                {{ $product->description }}
            </div>
        </div>
    </section>
    <!-- Description and questions End -->

    <!-- Features Start -->
    <section class="section-container py-5">
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-3">
                <div class="features__item d-flex align-items-center gap-2">
                    <div class="features__img">
                        <img class="w-100" src="{{ asset('uploads/settings/' . settings()->get('shipping_slogan')) }}"
                            alt="">
                    </div>
                    <div>
                        <h6 class="features__item-title m-0">{{ __('web/about.fast_shipping') }}</h6>
                        <p class="features__item-text m-0">
                            {{ settings()->get('shipping_slogan_' . app()->currentLocale()) }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-3">
                <div class="features__item d-flex align-items-center gap-2">
                    <div class="features__img">
                        <img class="w-100" src="{{ asset('uploads/settings/' . settings()->get('quality_assurace')) }}"
                            alt="">
                    </div>
                    <div>
                        <h6 class="features__item-title m-0">{{ __('web/about.quality') }}</h6>
                        <p class="features__item-text m-0">
                            {{ settings()->get('quality_assurance_' . app()->currentLocale()) }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-3">
                <div class="features__item d-flex align-items-center gap-2">
                    <div class="features__img">
                        <img class="w-100" src="{{ asset('uploads/settings/' . settings()->get('technical_support')) }}"
                            alt="">
                    </div>
                    <div>
                        <h6 class="features__item-title m-0">{{ __('web/about.technical') }}</h6>
                        <p class="features__item-text m-0">
                            {{ settings()->get('technical_support_' . app()->currentLocale()) }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-3">
                <div class="features__item d-flex align-items-center gap-2">
                    <div class="features__img">
                        <img class="w-100" src="{{ asset('uploads/settings/' . settings()->get('easy_exchange')) }}"
                            alt="">
                    </div>
                    <div>
                        <h6 class="features__item-title m-0">{{ __('web/about.exchange') }}</h6>
                        <p class="features__item-text m-0">{{ settings()->get('easy_exchange_' . app()->currentLocale()) }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features End -->

    <!-- May love Start -->
    {{-- <section class="section-container">
        <div class="d-flex gap-4 align-items-center w-100 mb-4">
            <h5 class="m-0">قد يعجبك ايضا...</h5>
            <hr class="flex-grow-1">
        </div>
        <div class="row">
            <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
                <div class="product__header mb-3">
                    <a href="single-product.html">
                        <div class="product__img-cont">
                            <img class="product__img w-100 h-100 object-fit-cover" src="assets/images/product-1.webp"
                                data-id="white">
                        </div>
                    </a>
                    <div class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white">
                        وفر 10%
                    </div>
                    <div
                        class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white">
                        <i class="fa-regular fa-heart"></i>
                    </div>
                </div>
                <div class="product__title text-center">
                    <a class="text-black text-decoration-none" href="single-product.html">
                        Flutter Apprentice
                    </a>
                </div>
                <div class="product__author text-center">
                    Mike Katz
                </div>
                <div class="product__price text-center d-flex gap-2 justify-content-center flex-wrap">
                    <span class="product__price product__price--old">
                        550.00 جنيه
                    </span>
                    <span class="product__price">
                        350.00 جنيه
                    </span>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- May love End -->

    <!-- Related products Start -->
    {{-- <section class="section-container">
        <div class="d-flex gap-4 align-items-center w-100 mb-4">
            <h5 class="m-0">منتجات ذات صلة</h5>
            <hr class="flex-grow-1">
        </div>
        <div class="row">
            <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
                <div class="product__header mb-3">
                    <a href="single-product.html">
                        <div class="product__img-cont">
                            <img class="product__img w-100 h-100 object-fit-cover" src="assets/images/product-1.webp"
                                data-id="white">
                        </div>
                    </a>
                    <div class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white">
                        وفر 10%
                    </div>
                    <div
                        class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white">
                        <i class="fa-regular fa-heart"></i>
                    </div>
                </div>
                <div class="product__title text-center">
                    <a class="text-black text-decoration-none" href="single-product.html">
                        Flutter Apprentice
                    </a>
                </div>
                <div class="product__author text-center">
                    Mike Katz
                </div>
                <div class="product__price text-center d-flex gap-2 justify-content-center flex-wrap">
                    <span class="product__price product__price--old">
                        550.00 جنيه
                    </span>
                    <span class="product__price">
                        350.00 جنيه
                    </span>
                </div>
            </div>
            <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
                <div class="product__header mb-3">
                    <a href="single-product.html">
                        <div class="product__img-cont">
                            <img class="product__img w-100 h-100 object-fit-cover" src="assets/images/product-2.webp"
                                data-id="white">
                        </div>
                    </a>
                    <div class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white">
                        وفر 10%
                    </div>
                    <div
                        class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white">
                        <i class="fa-regular fa-heart"></i>
                    </div>
                </div>
                <div class="product__title text-center">
                    <a class="text-black text-decoration-none" href="single-product.html">
                        Modern Full-Stack Development
                    </a>
                </div>
                <div class="product__author text-center">
                    Frank Zammetti
                </div>
                <div class="product__price text-center d-flex gap-2 justify-content-center flex-wrap">
                    <span class="product__price product__price--old">
                        450.00 جنيه
                    </span>
                    <span class="product__price">
                        250.00 جنيه
                    </span>
                </div>
            </div>
            <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
                <div class="product__header mb-3">
                    <a href="single-product.html">
                        <div class="product__img-cont">
                            <img class="product__img w-100 h-100 object-fit-cover" src="assets/images/product-3.webp"
                                data-id="white">
                        </div>
                    </a>
                    <div class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white">
                        وفر 10%
                    </div>
                    <div
                        class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white">
                        <i class="fa-regular fa-heart"></i>
                    </div>
                </div>
                <div class="product__title text-center">
                    <a class="text-black text-decoration-none" href="single-product.html">
                        C# 10 in a Nutshell
                    </a>
                </div>
                <div class="product__author text-center">
                    Joseph Albahari
                </div>
                <div class="product__price text-center d-flex gap-2 justify-content-center flex-wrap">
                    <span class="product__price product__price--old">
                        650.00 جنيه
                    </span>
                    <span class="product__price">
                        450.00 جنيه
                    </span>
                </div>
            </div>
            <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
                <div class="product__header mb-3">
                    <a href="single-product.html">
                        <div class="product__img-cont">
                            <img class="product__img w-100 h-100 object-fit-cover" src="assets/images/product-4.webp"
                                data-id="white">
                        </div>
                    </a>
                    <div class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white">
                        وفر 10%
                    </div>
                    <div
                        class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white">
                        <i class="fa-regular fa-heart"></i>
                    </div>
                </div>
                <div class="product__title text-center">
                    <a class="text-black text-decoration-none" href="single-product.html">
                        Algorithms عربي
                    </a>
                </div>
                <div class="product__author text-center">
                    Aditya Y. Bhargava
                </div>
                <div class="product__price text-center d-flex gap-2 justify-content-center flex-wrap">
                    <span class="product__price product__price--old">
                        359.00 جنيه
                    </span>
                    <span class="product__price">
                        249.00 جنيه
                    </span>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Related products End -->

    <!-- Users comments Start -->
    {{-- <section class="section-container comments mb-5">
        <div class="d-flex gap-4 align-items-center w-100 mb-4">
            <h5 class="m-0">أعرف اراء عملاؤنا</h5>
            <hr class="flex-grow-1">
        </div>
        <div class="comments__slider owl-carousel owl-theme">
            <div class="comments__item">
                <div class="comments__icon">
                    <img class="w-100" src="assets/images/quote.png" alt="">
                </div>
                <div class="comments__text mb-3">
                    الكتاب جميل جدا
                </div>
                <div class="comments__author d-flex align-items-center gap-2">
                    <div class="comments__author-dash"></div>
                    <div class="comments__author-name fw-bolder">
                        Moamen Sherif
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Users comments End -->
@endsection
