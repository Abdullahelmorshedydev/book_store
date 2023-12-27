<div class="nav__cart offcanvas offcanvas-end px-3 py-2" tabindex="-1" id="nav__cart" aria-labelledby="nav__cart">
    <div class="nav__categories-header offcanvas-header align-items-center">
        <h5>{{ __('web/nav.shop_cart') }}</h5>
        <button type="button" class="border-0 bg-transparent text-danger nav__close" data-bs-dismiss="offcanvas"
            aria-label="Close">
            <i class="fa-solid fa-x fa-1x fw-light"></i>
        </button>
    </div>
    <div class="nav__categories-body offcanvas-body pt-4">
        @if (!empty($cart))
            @if (isset($products))
                <div class="cart-products">
                    <ul class="nav__list list-unstyled">
                        @foreach ($products as $product)
                            <li class="cart-products__item d-flex justify-content-between gap-2">
                                <div class="d-flex gap-2">
                                    <div>
                                        <form action="{{ route('cart.delete.item', $product->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="cart-products__remove">x</button>
                                        </form>
                                    </div>
                                    <div>
                                        <p class="cart-products__name m-0 fw-bolder">{{ $product->name }}</p>
                                        <p class="cart-products__price m-0">1 x {{ $product->price }}
                                            {{ __('web/home.pound') }}</p>
                                    </div>
                                </div>
                                <div class="cart-products__img">
                                    <img class="w-100" src="{{ asset('uploads/products/' . $product->image) }}"
                                        alt="">
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <div class="d-flex justify-content-between">
                        <p class="fw-bolder">{{ __('web/nav.total') }}:</p>
                        <p>{{ $cart->total }} {{ __('web/home.pound') }}</p>
                    </div>
                </div>
            @else
                <p>{{ __('web/nav.no_product') }}</p>
            @endif
            <a href="{{ route('order.checkout', $cart->id) }}"
                class="btn nav__cart-btn text-center text-white w-100 border-0 mb-3 py-2 px-3 bg-success">
                {{ __('web/nav.checkout') }}
            </a>
        @else
            <div class="text-info">
                no data in your cart
            </div>
        @endif
        <a href="{{ route('products.all') }}" class="btn nav__cart-btn text-center w-100 py-2 px-3 bg-transparent">
            {{ __('web/nav.continue_shopping') }}
        </a>
    </div>
</div>
