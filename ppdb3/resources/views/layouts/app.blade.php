<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- MAJESTIC STYLE -->
    <link rel="stylesheet" href="{{ asset('majestic/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('majestic/vendors/base/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('majestic/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('majestic/css/style.css') }}">
    <!-- endinject -->

</head>

<body>
    

        <main class="py-4">
            @yield('content')
        </main>

    </div>

    <!-- SCRIPT DARI MAJESTIC -->
    <!-- plugins:js -->
    <script src="{{ asset('majestic/vendors/base/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('majestic/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('majestic/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('majestic/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('majestic/js/off-canvas.js') }}"></script>
    <script src="{{ asset('majestic/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('majestic/js/template.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('majestic/js/dashboard.js') }}"></script>
    <script src="{{ asset('majestic/js/data-table.js') }}"></script>
    <script src="{{ asset('majestic/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('majestic/js/dataTables.bootstrap4.js') }}"></script>
</body>

</html>