<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>SOP&Five</title>
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="auth/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--=========================================auth/======================================================-->
    <link rel="stylesheet" type="text/css" href="auth/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--=========================================auth/======================================================-->
    <link rel="stylesheet" type="text/css" href="auth/vendor/animate/animate.css">
    <!--=========================================auth/======================================================-->
    <link rel="stylesheet" type="text/css" href="auth/vendor/css-hamburgers/hamburgers.min.css">
    <!--=========================================auth/======================================================-->
    <link rel="stylesheet" type="text/css" href="auth/vendor/animsition/css/animsition.min.css">
    <!--=========================================auth/======================================================-->
    <link rel="stylesheet" type="text/css" href="auth/vendor/select2/select2.min.css">
    <!--=========================================auth/======================================================-->
    <link rel="stylesheet" type="text/css" href="auth/vendor/daterangepicker/daterangepicker.css">
    <!--=========================================auth/======================================================-->
    <link rel="stylesheet" type="text/css" href="auth/css/util.css">
    <link rel="stylesheet" type="text/css" href="auth/css/main.css">
    <!--===============================================================================================-->
    @laravelPWA
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                {{ $slot }}
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="authvendor/jquery/jquery-3.2.1.min.js"></script>
    <!--=========auth======================================================================================-->
    <script src="authvendor/animsition/js/animsition.min.js"></script>
    <!--=========auth======================================================================================-->
    <script src="authvendor/bootstrap/js/popper.js"></script>
    <script src="authvendor/bootstrap/js/bootstrap.min.js"></script>
    <!--=========auth======================================================================================-->
    <script src="authvendor/select2/select2.min.js"></script>
    <!--=========auth======================================================================================-->
    <script src="authvendor/daterangepicker/moment.min.js"></script>
    <script src="authvendor/daterangepicker/daterangepicker.js"></script>
    <!--=========auth======================================================================================-->
    <script src="authvendor/countdowntime/countdowntime.js"></script>
    <!--=========auth======================================================================================-->
    <script src="authjs/main.js"></script>

</body>

</html>
