@extends('web.layouts.app')

@section('title', settings()->get('site_name_' . app()->currentLocale()))

@push('style')
@endpush

@section('content')
    <section class="page-top d-flex justify-content-center align-items-center flex-column text-center ">
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

    <section class="section-container profile my-3 my-md-5 py-5 d-md-flex gap-5">
        <div class="profile__left mt-4 mt-md-0 w-100">
            <div class="profile__tab-content orders active">
                @if (!isset($carts))
                    <div class="orders__none d-flex justify-content-between align-items-center py-3 px-4">
                        <p class="m-0">لم يتم تنفيذ اي طلب بعد.</p>
                        <button class="primary-button">تصفح المنتجات</button>
                    </div>
                @else
                    <table class="orders__table w-100">
                        <thead>
                            <th class="d-none d-md-table-cell">الطلب</th>
                            <th class="d-none d-md-table-cell">الحالة</th>
                            <th class="d-none d-md-table-cell">الاجمالي</th>
                            <th class="d-none d-md-table-cell">اجراءات</th>
                        </thead>
                        <tbody>
                            @foreach ($carts as $cart)
                                @if (isset($cart->order))
                                    <tr class="order__item">
                                        <td class="d-flex justify-content-between d-md-table-cell">
                                            <div><a href="">{{ $cart->order->id }}</a></div>
                                        </td>
                                        <td class="d-flex justify-content-between d-md-table-cell">
                                            <div>{{ $cart->order->status }}</div>
                                        </td>
                                        <td class="d-flex justify-content-between d-md-table-cell">
                                            <div>{{ $cart->total }}</div>
                                        </td>
                                        <td class="d-flex justify-content-between d-md-table-cell">
                                            <div><a class="primary-button" href="">عرض</a></div>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </section>
@endsection
