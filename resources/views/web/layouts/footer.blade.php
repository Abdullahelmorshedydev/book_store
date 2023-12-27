<!-- Footer Section Start -->
<footer class="footer text-white">
    <div class="footer__upper">
        <div class="section-container row">
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="footer__logo">
                    <img class="w-100" src="{{ asset('uploads/settings/' . settings()->get('site_logo')) }}"
                        alt="">
                </div>
                <p class="my-3 text-gray">{{ settings()->get('slogan_' . app()->currentLocale()) }}</p>
                <div class="footer__social d-flex gap-3">
                    <a href="{{ settings()->get('facebook_link') }}"><i
                            class="fa-brands fa-facebook fa-2x text-white"></i></a>
                    <a href="{{ settings()->get('instgram_link') }}"><i
                            class="fa-brands fa-instagram fa-2x text-white"></i></a>
                    <a href="{{ settings()->get('tiktok_link') }}"><i
                            class="fa-brands fa-tiktok fa-2x text-white"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 px-md-4 mb-5 mb-lg-0">
                <div class="footer__list-title fw-bolder mb-1">
                    {{ __('web/footer.about') }} {{ settings()->get('site_name_' . app()->currentLocale()) }}
                </div>
                <div class="footer__list list-unstyled p-0">
                    <li>
                        <a class="footer__link text-decoration-none d-inline-block text-gray py-1"
                            href="{{ route('about.index') }}">
                            {{ __('web/footer.who_we_are') }}
                        </a>
                    </li>
                    <li>
                        <a class="footer__link text-decoration-none d-inline-block text-gray py-1"
                            href="{{ route('contact.index') }}">{{ __('web/footer.contact_us') }}</a>
                    </li>
                    <li>
                        <a class="footer__link text-decoration-none d-inline-block text-gray py-1"
                            href="{{ route('privacy_policy') }}">{{ __('web/footer.privacy_policy') }}</a>
                    </li>
                    <li><a class="footer__link text-decoration-none d-inline-block text-gray py-1"
                            href="{{ route('return_policy') }}">{{ __('web/footer.exchange_return_policy') }}</a>
                    </li>
                    <li>
                        <a class="footer__link text-decoration-none d-inline-block text-gray py-1"
                            href="track-order.html">{{ __('web/footer.track_order') }}</a>
                    </li>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 px-md-4 mb-5 mb-lg-0">
                <div class="footer__list-title fw-bolder mb-1">
                    {{ __('web/branches.branches') }}
                </div>
                <div class="footer__list">
                    @foreach ($branches as $branch)
                        <div class="d-flex gap-3 mb-3">
                            <div class="fs-5"><i class="fa-solid fa-location-dot"></i></div>
                            <div class="text-gray">{{ $branch->name }}: {{ $branch->address }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div>
                    <div class="footer__list-title fw-bolder mb-1">
                        {{ __('web/footer.need_help') }}
                    </div>
                    <div class="d-flex gap-3 mb-3">
                        <div class="fs-5"><i class="fa-solid fa-envelope"></i></div>
                        <div class="text-gray">{{ settings()->get('need_help') }}</div>
                    </div>
                </div>
                <div>
                    <div class="footer__list-title fw-bolder mb-3">
                        {{ __('web/footer.share_our') }}
                    </div>
                    <form class="footer__form position-relative">
                        <input
                            class="footer__email-input w-100 bg-transparent border border-white py-2 px-3 rounded-2 text-white pe-5"
                            placeholder="{{ __('web/footer.email_address') }}">
                        <button
                            class="footer__submit mx-3 position-absolute top-50 translate-middle-y end-0 bg-transparent border-0 text-white d-flex align-items-center"><i
                                class="fa-solid fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom text-center p-3 section-container">
        {{ __('web/footer.reversed') }} Morshedy {{ now()->year }}
    </div>
</footer>
<!-- Footer Section End -->
