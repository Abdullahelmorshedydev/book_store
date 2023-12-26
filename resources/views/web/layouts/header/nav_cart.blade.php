<div class="nav__cart offcanvas offcanvas-end px-3 py-2" tabindex="-1" id="nav__cart" aria-labelledby="nav__cart">
    <div class="nav__categories-header offcanvas-header align-items-center">
        <h5>{{ __('web/nav.shop_cart') }}</h5>
        <button type="button" class="border-0 bg-transparent text-danger nav__close" data-bs-dismiss="offcanvas"
            aria-label="Close">
            <i class="fa-solid fa-x fa-1x fw-light"></i>
        </button>
    </div>
    <div class="nav__categories-body offcanvas-body pt-4">
        <p>{{ __('web/nav.no_product') }}</p>
        <div class="cart-products">
            <ul class="nav__list list-unstyled">
                <li class="cart-products__item d-flex justify-content-between gap-2">
                    <div class="d-flex gap-2">
                        <div>
                            <button class="cart-products__remove">x</button>
                        </div>
                        <div>
                            <p class="cart-products__name m-0 fw-bolder">Flutter Apprentice</p>
                            <p class="cart-products__price m-0">1 x 350.00 {{ __('web/home.pound') }}</p>
                        </div>
                    </div>
                    <div class="cart-products__img">
                        <img class="w-100" src="{{ asset('web/assets/images/product-1.png') }}" alt="">
                    </div>
                </li>
            </ul>
            <div class="d-flex justify-content-between">
                <p class="fw-bolder">{{ __('web/nav.total') }}:</p>
                <p>350.00 {{ __('web/home.pound') }}</p>
            </div>
        </div>
        <button class="nav__cart-btn text-center text-white w-100 border-0 mb-3 py-2 px-3 bg-success">{{ __('web/nav.checkout') }}</button>
        <button class="nav__cart-btn text-center w-100 py-2 px-3 bg-transparent">{{ __('web/nav.continue_shopping') }}</button>
    </div>
</div>
