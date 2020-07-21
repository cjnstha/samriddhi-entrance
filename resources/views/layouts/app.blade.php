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

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'pdfHtml5',
                    orientation: 'landscape',
                    pageSize: 'LEGAL'
                }
            ]
        });
    });
</script>
@yield('scripts')
</body>
</html>
