<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <title>Ostad Assaignment-11</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-sm.png') }}" />

    <!-- jsvectormap css -->
    <link href="{{ asset('assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

    {{-- custom_style.css start  --}}

    <link rel="stylesheet" href="{{ asset('assets/css/custom_style.css') }}">


    <!--Swiper slider css-->
    <link href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/b981429a8a.js" crossorigin="anonymous"></script>
    <!-- Layout config Js -->
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/icons.mins.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('backend.components.header')

        @include('backend.components.sidebar')

        <div class="main-content">
            <div class="container mt-5">
                @yield('contents')
            </div>
            <!-- End Page-content -->
        </div>
        <!-- end main content-->
        @include('backend.components.footer')
    </div>
    <!-- END layout-wrapper -->
 

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/libs') }}/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('assets/libs') }}/node-waves/waves.min.js"></script>
    <script src="{{ asset('assets/libs') }}/feather-icons/feather.min.js"></script>
    <script src="{{ asset('assets/js') }}/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="{{ asset('assets/js') }}/plugins.js"></script>

    <!-- apexcharts -->
    <script src="{{ asset('assets/libs') }}/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="{{ asset('assets/libs') }}/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="{{ asset('assets/libs') }}/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('assets/libs') }}/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('assets/js') }}/pages/dashboard-ecommerce.init.js"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js') }}/app.js"></script>

    {{-- toaster js link  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    </script>
</body>

</html>
