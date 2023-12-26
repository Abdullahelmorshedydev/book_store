@extends('web.layouts.app')

@section('title', settings()->get('site_name_' . app()->currentLocale()))

@push('style')
@endpush

@section('content')
    <section class="page-top d-flex justify-content-center align-items-center flex-column text-center">
        <div class="page-top__overlay"></div>
        <div class="position-relative">
            <div class="page-top__title mb-3">
                <h2>{{ __('web/footer.who_we_are') }}</h2>
            </div>
            <div class="page-top__breadcrumb">
                <a class="text-gray" href="index.html">{{ __('web/nav.home') }}</a> /
                <span class="text-gray">{{ __('web/footer.who_we_are') }}</span>
            </div>
        </div>
    </section>

    <section class="section-container d-flex align-items-center py-4">
        <div class="about__img text-center w-50">
            <img style="width: 100px" src="{{ asset('uploads/settings/' . settings()->get('site_logo')) }}"
                alt="" />
        </div>
        <div class="w-50">
            <h4 class="fw-bolder mb-4">{{ __('web/about.who_is_company') }}
                {{ settings()->get('site_name_' . app()->currentLocale()) }}</h4>
            <p class="m-0">
                {{ settings()->get('slogan_' . app()->currentLocale()) }}
            </p>
        </div>
    </section>

    <section class="text-white bg-black">
        <div class="section-container py-5">
            <h4 class="fw-bolder mb-4">{{ __('web/about.site_view') }}
                {{ settings()->get('site_name_' . app()->currentLocale()) }}</h4>
            <p class="m-0">
                {{ settings()->get('site_view_' . app()->currentLocale()) }}
            </p>
        </div>
    </section>

    <section class="section-container d-flex align-items-center py-5">
        <div class="w-50">
            <h4 class="fw-bolder mb-4">{{ __('web/about.site_goal') }}
                {{ settings()->get('site_name_' . app()->currentLocale()) }}</h4>
            <p class="m-0">
                {{ settings()->get('site_goals_' . app()->currentLocale()) }}
            </p>
        </div>
        <div class="about__img text-end w-50">
            <img class="w-100" src="{{ asset('uploads/settings/' . settings()->get('site_goals')) }}" alt="" />
        </div>
    </section>

    <section class="section-container py-5">
        <h4 class="text-center fw-bolder mb-4">
            {{ __('web/about.features') }} {{ settings()->get('site_name_' . app()->currentLocale()) }}
        </h4>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="features__item d-flex align-items-center gap-2">
                    <div class="features__img">
                        <img class="w-100" src="{{ asset('uploads/settings/' . settings()->get('shipping_slogan')) }}"
                            alt="" />
                    </div>
                    <div>
                        <h6 class="features__item-title m-0">{{ __('web/about.fast_shipping') }}</h6>
                        <p class="features__item-text m-0">
                            {{ settings()->get('shipping_slogan_' . app()->currentLocale()) }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="features__item d-flex align-items-center gap-2">
                    <div class="features__img">
                        <img class="w-100" src="{{ asset('uploads/settings/' . settings()->get('quality_assurance')) }}"
                            alt="" />
                    </div>
                    <div>
                        <h6 class="features__item-title m-0">{{ __('web/about.quality') }}</h6>
                        <p class="features__item-text m-0">
                            {{ settings()->get('quality_assurance_' . app()->currentLocale()) }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="features__item d-flex align-items-center gap-2">
                    <div class="features__img">
                        <img class="w-100" src="{{ asset('uploads/settings/' . settings()->get('technical_support')) }}"
                            alt="" />
                    </div>
                    <div>
                        <h6 class="features__item-title m-0">{{ __('web/about.technical') }}</h6>
                        <p class="features__item-text m-0">
                            {{ settings()->get('technical_support_' . app()->currentLocale()) }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="features__item d-flex align-items-center gap-2">
                    <div class="features__img">
                        <img class="w-100" src="{{ asset('uploads/settings/' . settings()->get('easy_exchange')) }}"
                            alt="" />
                    </div>
                    <div>
                        <h6 class="features__item-title m-0">{{ __('web/about.exchange') }}</h6>
                        <p class="features__item-text m-0">
                            {{ settings()->get('easy_exchange_' . app()->currentLocale()) }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
