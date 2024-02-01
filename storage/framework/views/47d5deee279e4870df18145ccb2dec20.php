<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SOP&Five</title>
    <meta name="description" content="">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="landing/assets/img/favicon.ico">


    <link href="../../vendors/prism/prism-okaidia.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="../../assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <!-- CSS here -->
    <link rel="stylesheet" href="landing/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="landing/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="landing/assets/css/slicknav.css">
    <link rel="stylesheet" href="landing/assets/css/flaticon.css">
    <link rel="stylesheet" href="landing/assets/css/gijgo.css">
    <link rel="stylesheet" href="landing/assets/css/animate.min.css">
    <link rel="stylesheet" href="landing/assets/css/animated-headline.css">
    <link rel="stylesheet" href="landing/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="landing/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="landing/assets/css/themify-icons.css">
    <link rel="stylesheet" href="landing/assets/css/slick.css">
    <link rel="stylesheet" href="landing/assets/css/nice-select.css">
    <link rel="stylesheet" href="landing/assets/css/style.css">

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    <?php echo $__env->yieldPushContent('styles'); ?>
    <?php $config = (new \LaravelPWA\Services\ManifestService)->generate(); echo $__env->make( 'laravelpwa::meta' , ['config' => $config])->render(); ?>
</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('landing.navigation', []);

$__html = app('livewire')->mount($__name, $__params, 'dhpbYdA', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

    <?php echo e($slot); ?>


    
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('landing.footer', []);

$__html = app('livewire')->mount($__name, $__params, 'q6lszPq', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../../vendors/popper/popper.min.js"></script>
    <script src="../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../vendors/is/is.min.js"></script>
    <script src="../../vendors/fontawesome/all.min.js"></script>
    <script src="../../vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../../vendors/list.js/list.min.js"></script>
    <script src="../../vendors/feather-icons/feather.min.js"></script>
    <script src="../../vendors/dayjs/dayjs.min.js"></script>
    <script src="../../vendors/prism/prism.js"></script>
    <script src="../../assets/js/phoenix.js"></script>
    <script src="./landing/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Polanding/pper, Bootstrap -->
    <script src="./landing/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./landing/assets/js/popper.min.js"></script>
    <script src="./landing/assets/js/bootstrap.min.js"></script>
    <!-- Jquery Moblanding/ile Menu -->
    <script src="./landing/assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slilanding/ck , Owl-Carousel Plugins -->
    <script src="./landing/assets/js/owl.carousel.min.js"></script>
    <script src="./landing/assets/js/slick.min.js"></script>
    <!-- One Page, landing/Animated-HeadLin -->
    <script src="./landing/assets/js/wow.min.js"></script>
    <script src="./landing/assets/js/animated.headline.js"></script>
    <script src="./landing/assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Pickelanding/r -->
    <script src="./landing/assets/js/gijgo.min.js"></script>
    <!-- Nice-seleclanding/t, sticky -->
    <script src="./landing/assets/js/jquery.nice-select.min.js"></script>
    <script src="./landing/assets/js/jquery.sticky.js"></script>

    <!-- counter , landing/waypoint,Hover Direction -->
    <script src="./landing/assets/js/jquery.counterup.min.js"></script>
    <script src="./landing/assets/js/waypoints.min.js"></script>
    <script src="./landing/assets/js/jquery.countdown.min.js"></script>
    <script src="./landing/assets/js/hover-direction-snake.min.js"></script>

    <!-- contact jslanding/ -->
    <script src="./landing/assets/js/contact.js"></script>
    <script src="./landing/assets/js/jquery.form.js"></script>
    <script src="./landing/assets/js/jquery.validate.min.js"></script>
    <script src="./landing/assets/js/mail-script.js"></script>
    <script src="./landing/assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plulanding/gins, main Jquery -->
    <script src="./landing/assets/js/plugins.js"></script>
    <script src="./landing/assets/js/main.js"></script>

</body>

</html>
<!--
Downloaded from https://nullforums.net/resources/phoenix-admin-dashboard-webapp-template-html.6657/
5571ULFKZIEP4GEUX2VBM2J6QP64BM90UVHNKZVFHD0
-->
<?php /**PATH C:\xampp3\htdocs\sopyfive\resources\views/layouts/encuesta.blade.php ENDPATH**/ ?>