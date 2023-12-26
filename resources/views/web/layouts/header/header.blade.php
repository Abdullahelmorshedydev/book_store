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
        </div>
    </div>
</header>
