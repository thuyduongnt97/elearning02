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

    <!-- DataTables Css-->
    <link href="{{ asset('bower_components/datatables/media/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

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

            <a href="index.html" class="logo"><img alt="Logo" src="{!! asset(config('config_media.backend_img.logo')) !!}" /> <span>{!! __('text.hello') !!}</span></a>

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
                <li class="submenu">
                    <a class="active" href="index.html"><i class="fa fa-fw fa-bars"></i><span> Dashboard </span> </a>
                </li>

                <li class="submenu">
                    <a href="{{ asset('subject/list') }}"><i class="fa fa-fw fa fa-server"></i><span> {{ __('text.subject') }} </span> </a>
                </li>
                
                <li class="submenu">
                    <a href="#"><i class="fa fa-fw fa-table"></i> <span> {{ __('text.lesson') }} </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ asset('lesson/list') }}">{{ __('text.list_lesson') }}</a></li>
                        <li><a href="{{ asset('lesson/add') }}">{{ __('text.add_lesson') }}</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-fw fa-file-text-o"></i> <span> {{ __('text.question') }} </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ asset('question/list') }}">{{ __('text.list_question') }}</a></li>
                        <li><a href="{{ asset('question/add') }}">{{ __('text.add_question') }}</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa fa-fw fa-clone"></i> <span> {{ __('text.exam') }} </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ asset('exam/list') }}">{{ __('text.list_exam') }}</a></li>
                        <li><a href="{{ asset('exam/add') }}">{{ __('text.add_exam') }}</a></li>
                    </ul>
                </li>
                
                <li class="submenu">
                    <a href="{{ asset('user/list') }}"><i class="fa fa-fw fa-user"></i><span> {{ __('text.list_user') }} </span> </a>
                </li>
            </ul>
            <div class="clearfix"></div>
            </div>
        
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- End Sidebar -->
    <div class="content-page">
        <div class="content">
            <div class="container-fluid fluid" >
                <!-- Start content -->
                @yield('content')
                <!-- END content -->
            </div>
        </div>
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
<!-- datatables -->
<script src="{{ asset('bower_components/datatables/media/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('bower_components/datatables/media/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example1').DataTable();
        setTimeout(function(){ $('#mess').hide(1000); },2000);
    });
</script>
</body>
</html>
