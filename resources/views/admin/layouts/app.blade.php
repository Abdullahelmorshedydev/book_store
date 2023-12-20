<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.head')

<body class="main-body app sidebar-mini">

    @include('admin.layouts.preload')

    <!-- Page -->
    <div class="page">

        @include('admin.layouts.sidebar')

        @include('admin.layouts.content')

        @include('admin.layouts.rightSidebar')

        @include('admin.layouts.modal')

        @include('admin.layouts.footer')

    </div>
    <!-- End Page -->

    @include('admin.layouts.script')

</body>

</html>
