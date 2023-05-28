<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ env('APP_NAME') }} - {{ $title ?? ':)' }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('app') }}/assets/images/logo/favicon.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="{{ asset('app') }}/assets/css/app.min.css" rel="stylesheet">
    @stack('style')
</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            @include('layouts.navbar')
            <!-- Header END -->

            <!-- Side Nav START -->
            @include('layouts.sidebar')
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                <!-- Content Wrapper START -->
                <div class="main-content">
                    @yield('content')
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                @include('layouts.footer')
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->

        </div>
    </div>


    <!-- Core Vendors JS -->
    <script src="{{ asset('app') }}/assets/js/vendors.min.js"></script>

    <!-- page js -->
    <script src="{{ asset('app') }}/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="{{ asset('app') }}/assets/js/pages/dashboard-default.js"></script>

    <!-- Core JS -->
    <script src="{{ asset('app') }}/assets/js/app.min.js"></script>
    @stack('script')
</body>

</html>
