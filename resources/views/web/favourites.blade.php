@extends('web.layouts.app')

@section('title', settings()->get('site_name_' . app()->currentLocale()))

@push('style')
@endpush

@section('content')
    <div class="page-top d-flex justify-content-center align-items-center flex-column text-center">
        <div class="page-top__overlay"></div>
        <div class="position-relative">
            <div class="page-top__title mb-3">
                <h2>المفضلة</h2>
            </div>
            <div class="page-top__breadcrumb">
                <a class="text-gray" href="{{ route('index') }}">{{ __('web/nav.home') }}</a> /
                <span class="text-gray">المفضلة</span>
            </div>
        </div>
    </div>

    <div class="my-5 py-5">
        <section class="section-container favourites">
            <table class="w-100">
                <thead>
                    <th class="d-none d-md-table-cell"></th>
                    <th class="d-none d-md-table-cell"></th>
                    <th class="d-none d-md-table-cell">الاسم</th>
                    <th class="d-none d-md-table-cell">السعر</th>
                    <th class="d-none d-md-table-cell">المخزون</th>
                    <th class="d-table-cell d-md-none">product</th>
                </thead>
                <tbody class="text-center">
                    @foreach ($products as $product)
                        <tr>
                            <td class="d-block d-md-table-cell">
                                <a href="{{ route('favourites.delete', $product->id) }}">
                                    <span class="favourites__remove m-auto">
                                        <i class="fa-solid fa-xmark"></i>
                                    </span>
                                </a>
                            </td>
                            <td class="d-block d-md-table-cell favourites__img">
                                <img src="{{ asset('uploads/products/' . $product->image) }}" alt="" />
                            </td>
                            <td class="d-block d-md-table-cell">
                                <a href="{{ route('products.single_product', $product->id) }}"> {{ $product->name }} </a>
                            </td>
                            <td class="d-block d-md-table-cell">
                                @if ($product->offer_price != null)
                                    <span class="product__price product__price--old">
                                        {{ $product->offer_price }} {{ __('web/home.save') }}
                                    </span>
                                @endif
                                <span class="product__price">{{ $product->price }} {{ __('web/home.pound') }}</span>
                            </td>
                            <td class="d-block d-md-table-cell">
                                @if ($product->quantity != 0)
                                    <span class="me-2"><i class="fa-solid fa-check"></i></span>
                                    <span class="d-inline-block d-md-none d-lg-inline-block">متوفر بالمخزون</span>
                                @else
                                    <span class="me-2"><i class="fa-solid fa-check-none"></i></span>
                                    <span class="d-inline-block d-md-none d-lg-inline-block">غير متوفر</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </div>
@endsection
