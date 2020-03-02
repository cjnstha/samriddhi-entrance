<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Samriddhi Entrance Exam</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themify-icons.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/authors.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
<div class="main" id="app">
    @yield('header')
    <div id="wrapper">
        <div class="content">
            @yield('content')
            <div class="limit-box fl-wrap"></div>
        </div>
    </div>
    @yield('footer')
    <flash message="{{ session('flash')}}"></flash>
</div>
<!--=============== scripts  ===============-->

<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('assets/js/jquery.min.js')}}"><\/script>')</script>
<script src="{{asset ('assets/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset ('assets/js/plugins.js')}}"></script>
<script src="{{asset ('assets/js/scripts.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
@yield('scripts')
</body>
</html>
