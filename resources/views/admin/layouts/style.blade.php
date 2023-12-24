<!-- Favicon -->
<link rel="icon" href="{{ asset('admin/assets/img/brand/favicon.png') }}" type="image/x-icon" />

<!-- Icons css -->
<link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet">

<!--  Owl-carousel css-->
<link href="{{ asset('admin/assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />

<!--  Custom Scroll bar-->
<link href="{{ asset('admin/assets/plugins/mscrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />

<!--  Right-sidemenu css -->
<link href="{{ asset('admin/assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

<!-- Maps css -->
<link href="{{ asset('admin/assets/plugins/jqvmap/jqvmap.min.css') }}" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
    integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

@if (app()->getLocale() == 'ar')
    <!-- Sidemenu css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css-rtl/sidemenu.css') }}">

    <!--- Internal Morris css-->
    <link href="{{ asset('admin/assets/plugins/morris.js/morris.css') }}" rel="stylesheet">

    <!--- Style css --->
    <link href="{{ asset('admin/assets/css-rtl/style.css') }}" rel="stylesheet">

    <!--- Dark-mode css --->
    <link href="{{ asset('admin/assets/css-rtl/style-dark.css') }}" rel="stylesheet">

    <!---Skinmodes css-->
    <link href="{{ asset('admin/assets/css-rtl/skin-modes.css') }}" rel="stylesheet" />
@else
    <!-- Sidemenu css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/sidemenu.css') }}">

    <!-- style css -->
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/style-dark.css') }}" rel="stylesheet">

    <!---Skinmodes css-->
    <link href="{{ asset('admin/assets/css/skin-modes.css') }}" rel="stylesheet" />
@endif

@yield('style')
