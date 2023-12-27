@extends('web.layouts.app')

@section('title', settings()->get('site_name_' . app()->currentLocale()))

@push('style')
@endpush

@section('content')
    <div class="page-top d-flex justify-content-center align-items-center flex-column text-center">
        <div class="page-top__overlay"></div>
        <div class="position-relative">
            <div class="page-top__title mb-3">
                <h2>{{ __('web/nav.shop') }}</h2>
            </div>
            <div class="page-top__breadcrumb">
                <a class="text-gray" href="{{ route('index') }}">{{ __('web/nav.home') }}</a> /
                <span class="text-gray">{{ __('web/nav.shop') }}</span>
            </div>
        </div>
    </div>

    <div class="section-container d-block d-lg-flex gap-5 shop mt-5 pt-5">
        <div class="shop__filter mb-4">
            <div>
                <h6 class="shop__filter-title mb-3">{{ __('web/nav.filter') }}</h6>
                <div class="filter__size">
                    @foreach ($categories as $category)
                        <div class="mb-3">
                            <a class="text-black text-decoration-none"
                                href="{{ route('products.category_products', $category->id) }}">{{ $category->name }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="shop__products w-100">
            <div class="row products__list">
                @foreach ($products as $product)
                    <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
                        <div class="product__header mb-3">
                            <a href="single-product.html">
                                <div class="product__img-cont">
                                    <img class="product__img w-100 h-100 object-fit-cover"
                                        src="{{ asset('uploads/products/' . $product->image) }}" data-id="white" />
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
                        <div class="product__author text-center">{{ $product->author }}</div>
                        <div class="product__price text-center d-flex gap-2 justify-content-center flex-wrap">
                            @if ($product->offer_price != null)
                                <span class="product__price product__price--old">
                                    {{ $product->offer_price }} {{ __('web/home.pound') }}
                                </span>
                            @endif
                            <span class="product__price"> {{ $product->price }} {{ __('web/home.pound') }} </span>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="products__pagination mb-5 d-flex justify-content-center gap-2">
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection
