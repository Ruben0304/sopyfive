<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SOP&Five | Mercado</title>
    <meta name="description" content="">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('landing/assets/img/32.ico')}}">
    <link rel="stylesheet" href="{{asset('market/assets/css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href="{{asset('market/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('market/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('market/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('market/assets/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('market/assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('market/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('market/assets/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('market/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('market/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('market/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('market/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('market/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('market/assets/css/style.css')}}">
    @livewireStyles
    @livewireScripts
    <!-- CSS here -->
    @laravelPWA
    @stack('styles')
    <style media="screen and (min-width: 600px)">
        #entrarMovil {
            display: none;
        }
    </style>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('landing/assets/img/logo/logo.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    @if (session('error'))
        <script>
            alert('{{ session('error') }}');
        </script>
    @endif
    <livewire:market.layout.navigation>


                {{ $slot }}


        <livewire:landing.footer>
    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{asset('market/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('market/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('market/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('market/assets/js/bootstrap.min.js')}}"></script>

    <!-- Slick-slider , Owl-Carousel ,slick-nav -->
    <script src="{{asset('market/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('market/assets/js/slick.min.js')}}"></script>
    <script src="{{asset('market/assets/js/jquery.slicknav.min.js')}}"></script>

    <!-- One Page, Animated-HeadLin, Date Picker -->
    <script src="{{asset('market/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('market/assets/js/animated.headline.js')}}"></script>
    <script src="{{asset('market/assets/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('market/assets/js/gijgo.min.js')}}"></script>

    <!-- Nice-select, sticky,Progress -->
    <script src="{{asset('market/assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('market/assets/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('market/assets/js/jquery.barfiller.js')}}"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="{{asset('market/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('market/assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('market/assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('market/assets/js/hover-direction-snake.min.js')}}"></script>

    <!-- contact js -->
    <script src="{{asset('market/assets/js/contact.js')}}"></script>
    <script src="{{asset('market/assets/js/jquery.form.js')}}"></script>
    <script src="{{asset('market/assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('market/assets/js/mail-script.js')}}"></script>
    <script src="{{asset('market/assets/js/jquery.ajaxchimp.min.js')}}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{asset('market/assets/js/plugins.js')}}"></script>
    <script src="{{asset('market/assets/js/main.js')}}"></script>

</body>

</html>
<!--
Downloaded from https://nullforums.net/resources/phoenix-admin-dashboard-webapp-template-html.6657/
5571ULFKZIEP4GEUX2VBM2J6QP64BM90UVHNKZVFHD0
-->
