<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Proceso automatizado Checklist">
    <meta name="author" content="GGRR">

    <title>CheckList</title>

    <!-- Fonts -->
    <link href="{{ asset('vendor/font-awesome-4.6.3/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" >

    <!-- Styles -->
    <link href="{{ asset('vendor/bootstrap-3.3.7/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
     
    <!-- MetisMenu CSS -->
    <link href="{{ asset('vendor/metisMenu/css/metisMenu.min.css') }}" rel="stylesheet" type="text/css" >

    <!-- sb-admin-2 CSS -->
    <link href="{{ asset('vendor/sb-admin-2/css/sb-admin-2.min.css') }}" rel="stylesheet" type="text/css" >
    
    <!-- css -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
</head>
<body id="app-layout">
    <div id="wrapper">
        @if (Auth::guest())
            @include('layouts.partials.navbarGuest')
        @else
            @include('layouts.partials.navbar')
        @endif
        <div id="page-wrapper">
            @yield('content')
        </div>
    </div>
    

    <!-- JavaScripts -->
    <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('vendor/bootstrap-3.3.7/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('vendor/metisMenu/js/metisMenu.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('vendor/sb-admin-2/js/sb-admin-2.min.js') }}"></script>

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
