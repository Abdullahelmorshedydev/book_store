@extends('web.layouts.app')

@section('title', settings()->get('site_name_' . app()->currentLocale()))

@push('style')
@endpush

@section('content')
    <section class="page-top d-flex justify-content-center align-items-center flex-column text-center">
        <div class="page-top__overlay"></div>
        <div class="position-relative">
            <div class="page-top__title mb-3">
                <h2>{{ __('web/footer.exchange_return_policy') }}</h2>
            </div>
            <div class="page-top__breadcrumb">
                <a class="text-gray" href="{{ route('index') }}">{{ __('web/nav.home') }}</a> /
                <span class="text-gray">{{ __('web/footer.exchange_return_policy') }}</span>
            </div>
        </div>
    </section>

    <section class="section-container my-5">
        {!! settings()->get('exchange_and_return_policy_' . app()->currentLocale()) !!}
    </section>
@endsection
