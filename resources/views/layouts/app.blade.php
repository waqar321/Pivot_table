<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   
    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->

<head>
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <meta charset="UTF-8">
    <title>WorkWise Html Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('JObTask/css/animate.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('JobTask/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('JobTask/css/jquery.range.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('JobTask/css/line-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('JobTask/css/line-awesome-font-awesome.min.css') }}">
    <link href="{{ asset('JobTask/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('JobTask/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('JobTask/lib/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('JobTask/lib/slick/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('JobTask/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('JobTask/css/responsive.css') }}">
    <style>
        .nav-pills.tabs-my .nav-link.active, .nav-pills.tabs-my .show>.nav-link {
            background: #e44d3a;
            color: #fff;
        }
        .nav-pills.tabs-my .nav-link {
            color: #e44d3a;
        }
        </style>



</head>


    <!-- Scripts -->
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->

<body oncontextmenu="return false;">
 
  
        <main class="py-4">
            @yield('content')
        </main>
    
    <script type="text/javascript" src="{{ asset('JobTask/js/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript" src="{{ asset('JobTask/js/popper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('JobTask/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('JobTask/js/jquery.range-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('JobTask/lib/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('JobTask/js/script.js') }}"></script>
    <script>
        $(document).ready(function() {
        $('.all_countries').select2();
        });
    </script>


</body>
</html>
