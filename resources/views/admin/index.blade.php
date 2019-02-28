<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>{!! __('text.home') !!}</title>
    <meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
    <meta name="author" content="Pike Web Development - https://www.pikephp.com">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  
    <!-- Font Awesome CSS -->
    <link href="{{ asset('bower_components/components-font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
  
</head>

<body class="adminbody">

<div id="main">

    <!-- top bar navigation -->
    <div class="headerbar">

        <!-- LOGO -->
        <div class="headerbar-left">
            <a href="#" class="logo"><span>{!! __('text.hello') !!}</span></a>
        </div>

        <nav class="navbar-custom">

            <ul class="list-inline menu-left mb-0">
                <li class="float-left">
                    <button class="button-menu-mobile open-left">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                </li>                        
            </ul>

        </nav>

    </div>
    <!-- End Navigation -->
    
 
    <!-- Left Sidebar -->
    <div class="left main-sidebar">
    
        <div class="sidebar-inner leftscroll">

            <div id="sidebar-menu">
        
            <ul>
            </ul>

            <div class="clearfix"></div>

            </div>
        
            <div class="clearfix"></div>

        </div>

    </div>
    <!-- End Sidebar -->
    <div class="content-page">
    
        <!-- Start content -->
        @yield('content')
        <!-- END content -->

    </div>
    <!-- END content-page -->
    
    <footer class="footer">
        <span class="text-right">
        
        </span>
        <span class="float-right">

        </span>
    </footer>

</div>
<!-- END main -->

<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- App js -->
<script src="{{ asset('js/pikeadmin.js') }}"></script>
</body>
</html>
