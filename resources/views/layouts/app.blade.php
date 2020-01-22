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
    {{-- <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/reset.css') }}"> --}}
    {{-- <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themify-icons.css') }}">
   {{--  <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/main.css') }}"> --}}
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/authors.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/color.css') }}">
    <!--=============== favicons ===============-->
     <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
     <!--Responsive Extension Datatables CSS-->
     <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<style>
    .switch {
        display: inline-block;
        height: 24px;
        position: relative;
        width: 45px;
    }
    .switch input {
        display: none;
    }
    input[type=checkbox], input[type=radio] {
        /* vertical-align: baseline; */
    }
    input[type=checkbox] {
        vertical-align: bottom;
    }
    [type=checkbox], [type=radio] {
        /* box-sizing: border-box; */
        /* padding: 0; */
    }
    input:checked+.slider {
        background-color: #328af1;
    }
    .slider.round {
        border-radius: 34px;
    }
    .slider, .slider:before {
        position: absolute;
        -webkit-transition: .4s;
        transition: .4s;
    }
    .slider {
        background-color: #ccc;
        bottom: 0;
        cursor: pointer;
        left: 0;
        right: 0;
        top: 0;
    }
    input:checked+.slider:before {
        -webkit-transform: translateX(21px);
        transform: translateX(21px);
    }
    .slider.round:before {
        border-radius: 50%;
    }
    .slider:before {
        background-color: #fff;
        bottom: 2px;
        content: "";
        height: 20px;
        left: 1.5px;
        width: 20px;
    }
    .slider, .slider:before {
        position: absolute;
        -webkit-transition: .4s;
        transition: .4s;
    }
    table.table tbody tr td {
        text-align: center;
        vertical-align: middle;
    }
    
    /*.form-group .addmore .btn, .form-group .input-group {
        margin-bottom: 0;
    }*/
    /*.image-browse-btn {
        width: 200px!important;
    }*/
    .input-group {
        position: relative;
        display: -webkit-box;
        display: flex;
        flex-wrap: wrap;
        -webkit-box-align: stretch;
        align-items: stretch;
        width: 100%;
    }
    
    .browse.input-group .btn-primary {
        padding: 5px 36px;
        margin-left: 12px;
        height: 40px;
        line-height: 27px;
        color: #fff;
    }
    .btn-primary:hover {
        color: #fff;
        background-color: #286090;
        border-color: #204d74;
    }
    img{
        max-width: 50%;
    }
</style>
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
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
    $(document).ready(function() {
        var table = $('#example').DataTable( {
                responsive: true
            } )
            .columns.adjust()
            .responsive.recalc();
    } );
    $(document).ready(function() {
        var table = $('#studenlist').DataTable( {
                responsive: true,
                "pageLength": 100
            } )
            .columns.adjust()
            .responsive.recalc();
    } );
</script>
<script src="{{asset('assets/js/custom.js')}}"></script>
@yield('scripts')
</body>
</html>
