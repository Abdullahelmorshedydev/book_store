@extends('web.layouts.app')

@section('title', settings()->get('site_name_' . app()->currentLocale()))

@push('style')
@endpush

@section('content')
    <section class="page-top d-flex justify-content-center align-items-center flex-column text-center ">
        <div class="page-top__overlay"></div>
        <div class="position-relative">
            <div class="page-top__title mb-3">
                <h2>{{ __('web/contact.title') }}</h2>
            </div>
            <div class="page-top__breadcrumb">
                <a class="text-gray" href="{{ route('index') }}">{{ __('web/nav.home') }}</a> /
                <span class="text-gray">{{ __('web/contact.title') }}</span>
            </div>
        </div>
    </section>

    <section class="section-container py-5">
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-3">
                <div class="contact__item h-100 d-flex align-items-center gap-2">
                    <div class="contact__icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div>
                        <h6 class="contact__item-title m-0">{{ __('web/contact.call') }}</h6>
                        <p class="contact__item-text m-0">{{ settings()->get('phone') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-3">
                <div class="contact__item h-100 d-flex align-items-center gap-2">
                    <div class="contact__icon">
                        <i class="fa-regular fa-envelope"></i>
                    </div>
                    <div>
                        <h6 class="contact__item-title m-0">{{ __('web/contact.email_contact') }}</h6>
                        <p class="contact__item-text m-0">{{ settings()->get('email') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-3">
                <div class="contact__item h-100 d-flex align-items-center gap-2">
                    <div class="contact__icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div>
                        <h6 class="contact__item-title m-0">{{ __('web/contact.address') }}</h6>
                        <p class="contact__item-text m-0">{{ settings()->get('address') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-3">
                <div class="contact__item h-100 d-flex align-items-center gap-2">
                    <div class="contact__icon">
                        <i class="fa-solid fa-comments"></i>
                    </div>
                    <div>
                        <h6 class="contact__item-title m-0">{{ __('web/contact.quality_assurance') }}</h6>
                        <p class="contact__item-text m-0">
                            {{ settings()->get('quality_assurance_' . app()->currentLocale()) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-container contact d-md-flex align-items-center mb-3">
        <div class="contact__side w-50">
            <h4 class="mb-3">{!! settings()->get('contact_title_' . app()->currentLocale()) !!}</h4>
            <p>{!! settings()->get('contact_content_' . app()->currentLocale()) !!}</p>
            <form class="contact__form" action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="d-flex gap-3 mb-3">
                    <div class="w-50">
                        <label for="name">{{ __('web/contact.name_label') }}<span class="required">*</span></label>
                        <input name="name" value="{{ old('name') }}" class="contact__input" id="name"
                            type="text">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-50">
                        <label for="phone">{{ __('web/contact.phone_label') }}<span class="required">*</span></label>
                        <input name="phone" value="{{ old('phone') }}" class="contact__input" id="phone"
                            type="text">
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email">{{ __('web/contact.email_label') }}<span class="required">*</span></label>
                    <input name="email" value="{{ old('email') }}" class="contact__input" id="email" type="text">
                </div>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="reason">{{ __('web/contact.reason_label') }}<span class="required">*</span></label>
                    <select name="reason" class="contact__input" id="reason">
                        <option disabled value="">- اضغط هنا لاختيرا السبب -</option>
                        @if (app()->currentLocale() == 'ar')
                            @foreach ($reason_ar as $reason)
                                <option {{ $reason == old('reason') ? 'selected' : '' }} value="{{ $reason }}">
                                    {{ $reason }}
                                </option>
                            @endforeach
                        @elseif(app()->currentLocale() == 'en')
                            @foreach ($reason_en as $reason)
                                <option {{ $reason == old('reason') ? 'selected' : '' }} value="{{ $reason }}">
                                    {{ $reason }}
                                </option>
                            @endforeach
                        @endif
                    </select>
                </div>
                @error('reason')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div>
                    <label for="message">{{ __('web/contact.message_label') }}<span class="required">*</span></label>
                    <textarea class="contact__input" name="message" id="message">{{ old('message') }}</textarea>
                </div>
                @error('message')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <button type="submit" class="primary-button w-100 rounded-2">{{ __('web/contact.submit') }}</button>
            </form>
        </div>
        <div class="contact__side w-50 text-center">
            <img class="w-100" src="{{ asset('uploads/settings/' . settings()->get('contact')) }}" alt="">
        </div>
    </section>

    <div class="section-container my-5 px-4">
        <div class="contact__map"></div>
    </div>
@endsection
