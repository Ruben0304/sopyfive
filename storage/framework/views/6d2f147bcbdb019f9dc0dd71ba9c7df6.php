<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SOP&Five</title>
    <meta name="description" content="">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="landing/assets/img/favicon.ico">

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
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="landing/assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('landing.navigation', []);

$__html = app('livewire')->mount($__name, $__params, 'S1rOmYU', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

        <main>
            <!--? Slider Area Start-->
            <div class="slider-area">
                <video src="landing/assets/video/720.mp4" autoplay muted loop
                    style="position: absolute;width: 100%;height: 95%;object-fit: cover "></video>


                <!-- Slider Single -->
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('landing.slider', []);

$__html = app('livewire')->mount($__name, $__params, 'ai0cyi5', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>


            </div>


           
                    
        
                <!-- About-2 Area End -->
                <section class="wantToWork-area section-bg3"
                    data-background="landing/assets/img/gallery/section_bg01.png">
                    <div class="container">
                        <div class="wants-wrapper w-padding2">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-xl-7 col-lg-9 col-md-8">
                                    <div class="wantToWork-caption wantToWork-caption2">
                                        <h2>Qué te ofrece <br>
                                            nuestro sitio ?</h2>
                                        <p>Salud integral, vida plena<br> y equilibrada</p>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4">
                                    <a href="services.html" class="btn f-right sm-left">Ver
                                        Comunidades</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--? Services Area Start -->
                <div class="service-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-cat text-center mb-50">
                                    <div class="cat-icon">
                                        <img src="landing/assets/img/icon/services1.svg" alt="">
                                    </div>
                                    <div class="cat-cap">
                                        <h5><a href="services.html">Mercado</a></h5>
                                        <p>Descubre suplementos especializados para el
                                            manejo del
                                            síndrome de ovario
                                            poliquístico, diseñados con principios de
                                            medicina funcional
                                            para un bienestar
                                            integral.</p>
                                        <a href="services.html" class="plus-btn"><i class="ti-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-cat text-center mb-50">
                                    <div class="cat-icon">
                                        <img src="landing/assets/img/icon/services2.svg" alt="">
                                    </div>
                                    <div class="cat-cap">
                                        <h5><a href="services.html">Comunidad</a></h5>
                                        <p>Explora un espacio único para nutrición, cultura
                                            física,
                                            sueño y salud mental, con
                                            comunidades activas, chat en vivo y diálogo
                                            interactivo.</p>
                                        <a href="services.html" class="plus-btn"><i class="ti-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-cat text-center mb-50">
                                    <div class="cat-icon">
                                        <img src="landing/assets/img/icon/services3.svg" alt="">
                                    </div>
                                    <div class="cat-cap">
                                        <h5><a href="services.html">Consultas</a></h5>
                                        <p>Conéctate con médicos expertos en medicina
                                            funcional y
                                            síndrome de ovario
                                            poliquístico, obteniendo consejos personalizados
                                            y
                                            suplementos adecuados.</p>
                                        <a href="services.html" class="plus-btn"><i class="ti-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Services Area End -->
                <!--? Testimonial Area Start -->
                <section class="testimonial-area testimonial-padding fix">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class=" col-lg-9">
                                <div class="about-caption">
                                    <!-- Testimonial Start -->
                                    <div class="h1-testimonial-active dot-style">
                                        <!-- Single Testimonial -->
                                        <div class="single-testimonial position-relative">
                                            <div class="testimonial-caption">
                                                <img src="assets/img/icon/quotes-sign.png" alt=""
                                                    class="quotes-sign">
                                                <p>"La salud mental no se caracteriza
                                                    únicamente por la
                                                    ausencia de trastornos
                                                    mentales, sino por un estado de
                                                    bienestar en el que
                                                    la persona realiza sus
                                                    capacidades y es capaz de hacer frente
                                                    al estrés
                                                    normal de la vida, de
                                                    trabajar y de contribuir a su
                                                    comunidad."</p>
                                            </div>
                                            <!-- founder -->
                                            <div class="testimonial-founder d-flex align-items-center">
                                                <div class="founder-img">
                                                    <img src="landing/assets/img/icon/testimonial.png" alt="">
                                                </div>
                                                <div class="founder-text">
                                                    <span>Organización Mundial de la
                                                        Salud</span>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Testimonial -->
                                        <div class="single-testimonial position-relative">
                                            <div class="testimonial-caption">
                                                <img src="assets/img/icon/quotes-sign.png" alt=""
                                                    class="quotes-sign">
                                                <p>"El bienestar abarca un cuerpo sano, una
                                                    mente sana y
                                                    un espíritu tranquilo.
                                                    Disfruta del viaje mientras trabajas en
                                                    tu
                                                    bienestar."</p>
                                            </div>
                                            <!-- founder -->
                                            <div class="testimonial-founder d-flex align-items-center">
                                                <div class="founder-img">
                                                    <img src="landing/assets/img/icon/testimonial.png" alt="">
                                                </div>
                                                <div class="founder-text">
                                                    <span>Laurette Gagnon Beaulieu</span>
                                                    <p>“Defensora del bienestar y autora</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--? Testimonial Area End -->
                <!--? video_start -->
                <div class="container">
                    <div class="video-area section-bg2 d-flex align-items-center"
                        data-background="landing/assets/img/gallery/video-bg.png">
                        <div class="video-wrap position-relative">
                            <div class="video-icon">
                                <a class="popup-video btn-icon" href=""><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- video_end -->
                <!--? Blog Area Start -->
                <section class="home-blog-area section-padding30">
                    <div class="container">
                        <!-- Section Tittle -->
                        <div class="row justify-content-center">
                            <div class="col-lg-7 col-md-9 col-sm-10">
                                <div class="section-tittle text-center mb-100">
                                    <h2>Blog</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="home-blog-single mb-40">
                                    <div class="blog-img-cap">
                                        <div class="blog-img">
                                            <img src="landing/assets/img/gallery/blog1.png" alt="">
                                        </div>
                                        <div class="blog-cap">
                                            <h3><a href="blog_details.html">Desayunos
                                                    Saludables</a>
                                            </h3>
                                            <P>Aprende a diseñar planes de desayuno
                                                saludables que te
                                                llenarán de energía y
                                                vitalidad, sin sacrificar sabor ni
                                                nutrición.</P>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="home-blog-single mb-40">
                                    <div class="blog-img-cap">
                                        <div class="blog-img">
                                            <img src="landing/assets/img/gallery/blog2.png" alt="">
                                        </div>
                                        <div class="blog-cap">
                                            <h3><a href="blog_details.html">Alimentación
                                                    Curativa</a>
                                            </h3>
                                            <P>Explora el poder sanador de los alimentos en
                                                nuestra
                                                serie sobre cómo la dieta
                                                puede actuar como tu aliada en la prevención
                                                y
                                                tratamiento de enfermedades.</P>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="home-blog-single mb-40">
                                    <div class="blog-img-cap">
                                        <div class="blog-img">
                                            <img src="landing/assets/img/gallery/blog3.png" alt="">
                                        </div>
                                        <div class="blog-cap">
                                            <h3><a href="blog_details.html">Equilibrio
                                                    Diario</a></h3>
                                            <P>Descubre cómo mantener un equilibrio
                                                nutricional perfecto
                                                con nuestra guía de
                                                dieta diaria, diseñada para promover la
                                                salud y el
                                                bienestar a largo plazo.</P>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Blog Area End -->
                <!--? About Law Start-->
                
                <!-- About Law End-->
        </main>

        
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('landing.footer');

$__html = app('livewire')->mount($__name, $__params, '6PHDIlb', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <!-- Scroll Up -->
        <div id="back-top">
            <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
        </div>

        <!-- JS here -->

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
<?php /**PATH C:\xampp3\htdocs\sopyfive\resources\views/landing.blade.php ENDPATH**/ ?>