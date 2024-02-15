<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Voler Admin Dashboard</title>

    <link rel="stylesheet" href="{{ asset('dist/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{asset ('dist/assets/vendors/simple-datatables/style.css')}}">

    <link rel="stylesheet" href="{{ asset('dist/assets/vendors/chartjs/Chart.min.css') }}">

    <link rel="stylesheet" href="{{ asset('dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('dist/assets/images/favicon.svg" type="image/x-icon') }}">
</head>

<body>
    <div id="app">
        @include('dashboard.layouts.sidebar')
        <div id="main">
            @include('dashboard.layouts.navbar')
            @yield('content')
            @include('dashboard.layouts.footer')
        </div>
    </div>
    <script src="{{ asset('dist/assets/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('dist/assets/js/app.js') }}"></script>

    <script src="{{ asset('dist/assets/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('dist/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dist/assets/js/pages/dashboard.js') }}"></script>
    <script src="{{asset ('dist/assets/vendors/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset ('dist/assets/js/vendors.js')}}"></script>


    <script src="{{ asset('dist/assets/js/main.js') }}"></script>
</body>

</html>
