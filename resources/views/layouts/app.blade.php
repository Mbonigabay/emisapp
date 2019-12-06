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
    <script src="{{ asset('js/j-query.js') }}" defer></script>
    <script src="{{ asset('js/datatables.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
    <script src="{{ asset('js/template/paper-dashboard.min.js') }}" defer></script>
    <script src="{{ asset('js/template/core/popper.min.js') }}" defer></script>
    <script src="{{ asset('js/template/plugins/bootstrap-notify.js') }}" defer></script>
    <script src="{{ asset('js/template/plugins/chartjs.min.js') }}" defer></script>
    <script src="{{ asset('js/template/plugins/perfect-scrollbar.jquery.min.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <!-- Material Kit CSS -->
    <link href="{{ asset('css/paper-dashboard.css') }}" rel="stylesheet" />

</head>

<body>
    <div id="app">
        <div class="wrapper">
            @include('includes.sidebar')
            <div class="main-panel">
                    @include('includes.nav')
                    <div class="content">
                            <div class="container-fluid">
                                    @yield('content')
                                    @include('includes.footer')
                            </div>
                    </div>
            </div>
        </div>
    </div>
    @yield('scripts')
</body>

</html>