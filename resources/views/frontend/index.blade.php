<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ __('text.home') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image" href="{{ asset(config('config_media.backend_img.logo')) }}"/>
    <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('bower_components/components-font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themify/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/animsition/dist/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
<!--===============================================================================================-->
</head>
<body class="animsition">

    <!-- Header -->
    <header>
        <!-- Header desktop -->
        <div class="wrap-menu-header gradient1 trans-0-4">
            <div class="container h-full">
                <div class="wrap_header trans-0-3">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{ asset(config('config_media.frontend_image.logo')) }}" alt="IMG-LOGO" data-logofixed="{{ asset(config('config_media.frontend_image.logo2')) }}">
                        </a>
                    </div>

                    <!-- Menu -->
                    <div class="wrap_menu p-l-45 p-l-0-xl">
                        <nav class="menu">
                            <ul class="main_menu">
                                <li>
                                    <a href="">{{ __('text.home') }}</a>
                                </li>

                                <li>
                                    <a href="">{{ __('text.subject') }}</a>
                                </li>

                                <li>
                                    <a href="">{{ __('text.lesson') }}</a>
                                </li>

                                <li>
                                    <a href="">{{ __('text.exam') }}</a>
                                </li>

                                <li>
                                    <a href="">{{ __('text.contact') }}</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Social -->
                    <div class="social flex-w flex-l-m p-r-20">
                        <a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a>

                        <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Sidebar -->
    <aside class="sidebar trans-0-4">
        <!-- Button Hide sidebar -->
        <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

        <!-- - -->
        <ul class="menu-sidebar p-t-95 p-b-70">
            <li class="t-center m-b-13">
                <a href="" class="txt19">{{ __('text.home') }}</a>
            </li>

            <li class="t-center m-b-13">
                <a href="" class="txt19">{{ __('text.subject') }}</a>
            </li>

            <li class="t-center m-b-13">
                <a href="" class="txt19">{{ __('text.lesson') }}</a>
            </li>

            <li class="t-center m-b-13">
                <a href="" class="txt19">{{ __('text.exam') }}t</a>
            </li>

            <li class="t-center m-b-33">
                <a href="" class="txt19">{{ __('text.contact') }}</a>
            </li>
        </ul>
    </aside>

    @yield('content')

    <!-- Footer -->
    <footer class="bg1">
        <div class="container p-t-40 p-b-70">
            <div class="row">
                <div class="col-sm-6 col-md-4 p-t-50">
                    <!-- - -->
                    <h4 class="txt13 m-b-33">
                       {{ __('text.contact') }}
                    </h4>

                    <ul class="m-b-70">
                        <li class="txt14 m-b-14">
                            <i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
                            8th floor, 379 Hudson St, New York, NY 10018
                        </li>

                        <li class="txt14 m-b-14">
                            <i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
                            (+1) 96 716 6879
                        </li>

                        <li class="txt14 m-b-14">
                            <i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
                            pato@gmail.com
                        </li>
                    </ul>

                    <!-- - -->
                    <h4 class="txt13 m-b-32">
                        Opening Times
                    </h4>

                    <ul>
                        <li class="txt14">
                            09:30 AM – 11:00 PM
                        </li>

                        <li class="txt14">
                            Every Day
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-md-4 p-t-50">
                    <!-- - -->
                    <h4 class="txt13 m-b-33">
                        {{ __('text.web') }}
                    </h4>

                    <div class="m-b-25">
                        <span class="fs-13 color2 m-r-5">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </span>
                        <a href="#" class="txt15">
                            {{ __('text.facebook') }}
                        </a>

                        <p class="txt14 m-b-18">
                            Activello is a good option. It has a slider built into that displays the featured image in the slider.
                            <a href="#" class="txt15">
                                https://facebook.com/pato
                            </a>
                        </p>

                        <span class="txt16">
                            21 Dec 2019
                        </span>
                    </div>

                    <div>
                        <span class="fs-13 color2 m-r-5">
                            <i class="fa fa-tripadvisor" aria-hidden="true"></i>
                        </span>
                        <a href="#" class="txt15">
                            {{ __('text.web') }}
                        </a>

                        <p class="txt14 m-b-18">
                            Activello is a good option. It has a slider built into that displays
                            <a href="#" class="txt15">
                                https://pato.com
                            </a>
                        </p>

                        <span class="txt16">
                            21 Dec 2019
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="end-footer bg2">
            <div class="container">
                <div class="flex-sb-m flex-w p-t-22 p-b-22">
                    <div class="p-t-5 p-b-5">
                        <a href="#" class="fs-15 c-white"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                        <a href="#" class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
                        <a href="#" class="fs-15 c-white"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a>
                    </div>

                    <div class="txt17 p-r-20 p-t-5 p-b-5">
                        Copyright &copy; 2019 minhchamtat <i class="fa fa-heart"></i> by <a href="https://colorlib.com" target="_blank">2mcd</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to top -->
    <div class="btn-back-to-top bg0-hov" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </span>
    </div>

    <!-- Container Selection1 -->
    <div id="dropDownSelect1"></div>

    <!-- Modal Video 01-->
    <div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="modal-dialog" role="document" data-dismiss="modal">
            <div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

            <div class="wrap-video-mo-01">
                <div class="w-full wrap-pic-w op-0-0"><img src="{{ asset(config('config_media.frontend_image.video')) }}" alt="IMG"></div>
                <div class="video-mo-01">
                    <iframe src="https://www.youtube.com/embed/5k1hSu2gdKE?rel=0&amp;showinfo=0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    
<!--===============================================================================================-->
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/animsition/dist/js/animsition.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('css/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/slick-custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/parallax100/parallax100.js') }}"></script>
    <script type="text/javascript">
        $('.parallax100').parallax100();
    </script>
<!--===============================================================================================-->
</body>
</html>
