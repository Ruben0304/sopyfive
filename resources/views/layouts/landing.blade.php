<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SOP&Five</title>
    <meta name="description" content="">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="landing/assets/img/32.ico">

    @livewireStyles
    @livewireScripts
    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('landing/assets/css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href="{{asset('landing/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('landing/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('landing/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('landing/assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('landing/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('landing/assets/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('landing/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('landing/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('landing/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('landing/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('landing/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('landing/assets/css/style.css')}}">
    @laravelPWA
    @stack('styles')
    <style media="screen and (min-width: 600px)">
        #entrarMovil {
            display: none;
        }
    </style>

</head>

<body>
    <!-- ? Preloader Start -->
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
    <!-- Preloader Start -->

    {{-- NAVEGACION --}}
    <livewire:landing.navigation>

        {{ $slot}}


        {{-- FOOTER --}}
        <livewire:landing.footer>

            <!-- Scroll Up -->
            <div id="back-top" style="background-color: #606060; z-index: 99999">
                <a title="Go to Top" href="{{route('encuesta')}}" > <i ><img src="{{asset('landing/assets/img/icon/gift.png')}}" alt="" width="65%"></i></a>
            </div>

            <!-- JS here -->

            <script src="{{asset('./landing/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
            <!-- Jquery, Polanding/pper, Bootstrap -->
            <script src="{{asset('./landing/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
            <script src="{{asset('./landing/assets/js/popper.min.js')}}"></script>
            <script src="{{asset('./landing/assets/js/bootstrap.min.js')}}"></script>
            <!-- Jquery Moblanding/ile Menu -->
            <script src="{{asset('./landing/assets/js/jquery.slicknav.min.js')}}"></script>

            <!-- Jquery Slilanding/ck , Owl-Carousel Plugins -->
            <script src="{{asset('./landing/assets/js/owl.carousel.min.js')}}"></script>
            <script src="{{asset('./landing/assets/js/slick.min.js')}}"></script>
            <!-- One Page, landing/Animated-HeadLin -->
            <script src="{{asset('./landing/assets/js/wow.min.js')}}"></script>
            <script src="{{asset('./landing/assets/js/animated.headline.js')}}"></script>
            <script src="{{asset('./landing/assets/js/jquery.magnific-popup.js')}}"></script>

            <!-- Date Pickelanding/r -->
            <script src="{{asset('./landing/assets/js/gijgo.min.js')}}"></script>
            <!-- Nice-seleclanding/t, sticky -->
            <script src="{{asset('./landing/assets/js/jquery.nice-select.min.js')}}"></script>
            <script src="{{asset('./landing/assets/js/jquery.sticky.js')}}"></script>

            <!-- counter , landing/waypoint,Hover Direction -->
            <script src="{{asset('./landing/assets/js/jquery.counterup.min.js')}}"></script>
            <script src="{{asset('./landing/assets/js/waypoints.min.js')}}"></script>
            <script src="{{asset('./landing/assets/js/jquery.countdown.min.js')}}"></script>
            <script src="{{asset('./landing/assets/js/hover-direction-snake.min.js')}}"></script>

            <!-- contact jslanding/ -->
            <script src="{{asset('./landing/assets/js/contact.js')}}"></script>
            <script src="{{asset('./landing/assets/js/jquery.form.js')}}"></script>
            <script src="{{asset('./landing/assets/js/jquery.validate.min.js')}}"></script>
            <script src="{{asset('./landing/assets/js/mail-script.js')}}"></script>
            <script src="{{asset('./landing/assets/js/jquery.ajaxchimp.min.js')}}"></script>

            <!-- Jquery Plulanding/gins, main Jquery -->
            <script src="{{asset('./landing/assets/js/plugins.js')}}"></script>
            <script src="{{asset('./landing/assets/js/main.js')}}"></script>

</body>

</html>
