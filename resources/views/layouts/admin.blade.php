<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>SOP&Five - Admin</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    @livewireStyles
    @livewireScripts
    <script src="../vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../vendors/simplebar/simplebar.min.js"></script>
    <script src="../assets/js/config.js"></script>
    <script>
        window.config.set({
            phoenixIsNavbarVerticalCollapsed: false
        });
        document.documentElement.classList.remove('navbar-vertical-collapsed');
    </script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="../assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <link href="../vendors/leaflet/leaflet.css" rel="stylesheet">
    <link href="../vendors/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
    <link href="../vendors/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">


    @laravelPWA
</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <livewire:admin.components.nav-vertical>
            <livewire:admin.components.nav-top>
                <script>
                    var navbarTopShape = window.config.config.phoenixNavbarTopShape;
                    var navbarPosition = window.config.config.phoenixNavbarPosition;
                    var body = document.querySelector('body');
                    var navbarDefault = document.querySelector('#navbarDefault');
                    var navbarTop = document.querySelector('#navbarTop');
                    var topNavSlim = document.querySelector('#topNavSlim');
                    var navbarTopSlim = document.querySelector('#navbarTopSlim');
                    var navbarCombo = document.querySelector('#navbarCombo');
                    var navbarComboSlim = document.querySelector('#navbarComboSlim');
                    var dualNav = document.querySelector('#dualNav');

                    var documentElement = document.documentElement;
                    var navbarVertical = document.querySelector('.navbar-vertical');

                    if (navbarPosition === 'dual-nav') {
                        topNavSlim.remove();
                        navbarTop.remove();
                        navbarVertical.remove();
                        navbarTopSlim.remove();
                        navbarCombo.remove();
                        navbarComboSlim.remove();
                        navbarDefault.remove();
                        dualNav.removeAttribute('style');
                        documentElement.classList.add('dual-nav');
                    } else if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
                        navbarDefault.remove();
                        navbarTop.remove();
                        navbarTopSlim.remove();
                        navbarCombo.remove();
                        navbarComboSlim.remove();
                        topNavSlim.style.display = 'block';
                        navbarVertical.style.display = 'inline-block';
                        body.classList.add('nav-slim');
                    } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
                        navbarDefault.remove();
                        navbarVertical.remove();
                        navbarTop.remove();
                        topNavSlim.remove();
                        navbarCombo.remove();
                        navbarComboSlim.remove();
                        navbarTopSlim.removeAttribute('style');
                        body.classList.add('nav-slim');
                    } else if (navbarTopShape === 'slim' && navbarPosition === 'combo') {
                        navbarDefault.remove();
                        //- navbarVertical.remove();
                        navbarTop.remove();
                        topNavSlim.remove();
                        navbarCombo.remove();
                        navbarTopSlim.remove();
                        navbarComboSlim.removeAttribute('style');
                        navbarVertical.removeAttribute('style');
                        body.classList.add('nav-slim');
                    } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
                        navbarDefault.remove();
                        topNavSlim.remove();
                        navbarVertical.remove();
                        navbarTopSlim.remove();
                        navbarCombo.remove();
                        navbarComboSlim.remove();
                        navbarTop.removeAttribute('style');
                        documentElement.classList.add('navbar-horizontal');
                    } else if (navbarTopShape === 'default' && navbarPosition === 'combo') {
                        topNavSlim.remove();
                        navbarTop.remove();
                        navbarTopSlim.remove();
                        navbarDefault.remove();
                        navbarComboSlim.remove();
                        navbarCombo.removeAttribute('style');
                        navbarVertical.removeAttribute('style');
                        documentElement.classList.add('navbar-combo')

                    } else {
                        topNavSlim.remove();
                        navbarTop.remove();
                        navbarTopSlim.remove();
                        navbarCombo.remove();
                        navbarComboSlim.remove();
                        navbarDefault.removeAttribute('style');
                        navbarVertical.removeAttribute('style');
                    }

                    var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
                    var navbarTop = document.querySelector('.navbar-top');
                    if (navbarTopStyle === 'darker') {
                        navbarTop.classList.add('navbar-darker');
                    }

                    var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
                    var navbarVertical = document.querySelector('.navbar-vertical');
                    if (navbarVerticalStyle === 'darker') {
                        navbarVertical.classList.add('navbar-darker');
                    }
                </script>
                {{ $slot }}

    </main>
    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../../../vendors/popper/popper.min.js"></script>
    <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../../vendors/is/is.min.js"></script>
    <script src="../../../vendors/fontawesome/all.min.js"></script>
    <script src="../../../vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../../../vendors/list.js/list.min.js"></script>
    <script src="../../../vendors/feather-icons/feather.min.js"></script>
    <script src="../../../vendors/dayjs/dayjs.min.js"></script>
    <script src="../../../assets/js/phoenix.js"></script>
    <script src="../../../vendors/swiper/swiper-bundle.min.js"></script>

</body>

</html>
<!--
Downloaded from https://nullforums.net/resources/phoenix-admin-dashboard-webapp-template-html.6657/
5571ULFKZIEP4GEUX2VBM2J6QP64BM90UVHNKZVFHD0
-->
