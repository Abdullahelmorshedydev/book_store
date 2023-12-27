<header>
    <div class="section-container d-flex justify-content-between">
        <div class="header__email d-flex gap-2 align-items-center">
            <i class="fa-regular fa-envelope"></i>
            {{ settings()->get('email') }}
        </div>
        <div class="header__info d-none d-lg-block">
            شحن مجاني للطلبات 💥 عند الشراء ب 699ج او اكثر
        </div>
        <div class="header__branches d-flex gap-2 align-items-center">
            <a class="text-white text-decoration-none" href="{{ route('branches.index') }}">
                <i class="fa-solid fa-location-dot"></i>
                {{ __('web/branches.branches') }}
            </a>
            @auth
                @if (auth()->user()->is_admin == 1)
                    <a class="text-white text-decoration-none" href="{{ route('admin.index') }}">
                        <i class="fa-solid fa-location-dot"></i>
                        {{ __('web/nav.dashboard') }}
                    </a>
                @endif
                <form class="text-white text-decoration-none" action="{{ route('auth.logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-primary">{{ __('web/nav.logout') }}</button>
                </form>
            @endauth
        </div>
    </div>
</header>
