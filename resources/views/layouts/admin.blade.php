<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.ico') }}">

    <!-- C3 charts css -->
    <link href="{{ asset('admin/plugins/c3/c3.min.css') }}" rel="stylesheet" type="text/css"  />

    <!-- App css -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('admin/js/modernizr.min.js') }}"></script>

    @livewireStyles
</head>
<body>
    
    <!-- Begin page -->
    <div id="wrapper">

        @include('layouts.inc.admin.navbar')
        @include('layouts.inc.admin.sidebar')

        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">

                  @yield('content')  
                    
                </div> 
            </div> 
        </div>
    </div>
    <!-- END wrapper -->

     <!-- jQuery  -->
     <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
     <script src="{{ asset('admin/js/tether.min.js') }}"></script><!-- Tether for Bootstrap -->
     <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('admin/js/metisMenu.min.js') }}"></script>
     <script src="{{ asset('admin/js/waves.js') }}"></script>
     <script src="{{ asset('admin/js/jquery.slimscroll.js') }}"></script>
    
     <!-- Counter js  -->
     <script src="{{ asset('admin/plugins/waypoints/jquery.waypoints.min.js') }}"></script>
     <script src="{{ asset('admin/plugins/counterup/jquery.counterup.min.js') }}"></script>
    
      <!--C3 Chart-->
     <script type="text/javascript" src="{{ asset('admin/plugins/d3/d3.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('admin/plugins/c3/c3.min.js') }}"></script>
    
     <!--Echart Chart-->
     <script src="{{ asset('admin/plugins/echart/echarts-all.js') }}"></script>
    
         <!-- Dashboard init -->
     <script src="{{ asset('admin/pages/jquery.dashboard.js') }}"></script>
    
     <!-- App js -->
     <script src="{{ asset('admin/js/jquery.core.js') }}"></script>
     <script src="{{ asset('admin/js/jquery.app.js') }}"></script>

    @livewireScripts
</body>
</html>
