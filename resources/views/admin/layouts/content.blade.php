<!-- main-content -->
<div class="main-content app-content">

    @include('admin.layouts.contentHeader')

    <!-- container -->
    <div class="container-fluid">

        <!-- breadcrumb -->
        @yield('breadcrumb')
        <!-- /breadcrumb -->

        @yield('content')
    </div>
    <!-- /Container -->
</div>
<!-- /main-content -->
