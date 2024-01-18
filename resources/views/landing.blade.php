<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
    <header>
        <!--? Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="index.html"><img src="landing/assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.html">Inicio</a></li>
                                            <li><a href="about.html">Mercado</a></li>
                                            {{-- <li><a href="services.html">Comunidades</a></li> --}}
                                            <li><a href="blog.html">Comunidades</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Nutrición</a></li>
                                                    <li><a href="blog_details.html">Cultura Física</a></li>
                                                    <li><a href="elements.html">Sueño</a></li>
                                                    <li><a href="elements.html">Salud Mental</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Sobre Nosotros</a></li>
                                            <li><a href="{{route('register')}}" wire:navigate>Entrar</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                {{-- <div class="header-right-btn f-right d-none d-lg-block ml-15">
                                    <a href="#" class="btn header-btn">Make an Appointment</a>
                                </div> --}}
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? Slider Area Start-->
        <div class="slider-area">
            <div class="slider-active dot-style">
                <!-- Slider Single -->
                <div class="single-slider d-flex align-items-center slider-height">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-8 col-md-10 ">
                                <div class="hero-wrapper">
                                    <!-- Video icon -->
                                    <div class="video-icon">
                                        <a class="popup-video btn-icon" href="videos/videooo.mp4"
                                            data-animation="bounceIn" data-delay=".4s">
                                            <i class="fas fa-play"></i>
                                        </a>
                                    </div>
                                    <div class="hero__caption">
                                        <h1 data-animation="fadeInUp" data-delay=".3s">Slider donde
                                        </h1>
                                        <p data-animation="fadeInUp" data-delay=".6s">daremos conocer lo más
                                            destacado<br>
                                        </p>
                                        <a href="services.html" class="btn" data-animation="fadeInLeft"
                                            data-delay=".3s">Ir a ver &#x1F603;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Single -->
                {{-- <div class="single-slider d-flex align-items-center slider-height">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-8 col-md-10 ">
                                <div class="hero-wrapper">
                                    <!-- Video icon -->
                                    <div class="video-icon">
                                        <a class="popup-video btn-icon"
                                            href="videos/video.mp4" data-animation="bounceIn"
                                            data-delay=".4s">
                                            <i class="fas fa-play"></i>
                                        </a>
                                    </div>
                                    <div class="hero__caption">
                                        <h1 data-animation="fadeInUp" data-delay=".3s">Health is wealth keep it healthy
                                        </h1>
                                        <p data-animation="fadeInUp" data-delay=".6s">Almost before we knew it, we<br>
                                            had left the ground</p>
                                        <a href="#" class="btn" data-animation="fadeInLeft"
                                            data-delay=".3s">Take a Service</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- Slider Area End -->
        <!--? About-2 Area Start -->
        {{-- <div class="about-area2 section-padding40">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <img src="landing/assets/img/gallery/about.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="about-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <h2>Create a healthy
                                    life you love!</h2>
                            </div>
                            <p class="pera-top mb-40">Almost before we knew it, we had left the ground</p>
                            <p class="pera-bottom mb-30">Praesent porttitor, nulla vitae posuere iaculis, arcu nisl
                                dignissim dolor, a pretium mi sem ut ipsum. Fusce
                                fermentum. Pellentesque libero tortor, tincidunt et.</p>
                            <div class="icon-about">
                                <img src="landing/assets/img/icon/about1.svg" alt="" class=" mr-20">
                                <img src="landing/assets/img/icon/about2.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- About-2 Area End -->
        <section class="wantToWork-area section-bg3" data-background="landing/assets/img/gallery/section_bg01.png">
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
                            <a href="services.html" class="btn f-right sm-left">Ver Comunidades</a>
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
                                <p>Descubre suplementos especializados para el manejo del síndrome de ovario
                                    poliquístico, diseñados con principios de medicina funcional para un bienestar
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
                                <p>Explora un espacio único para nutrición, cultura física, sueño y salud mental, con
                                    comunidades activas, chat en vivo y diálogo interactivo.</p>
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
                                <p>Conéctate con médicos expertos en medicina funcional y síndrome de ovario
                                    poliquístico, obteniendo consejos personalizados y suplementos adecuados.</p>
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
                                        <p>"La salud mental no se caracteriza únicamente por la ausencia de trastornos
                                            mentales, sino por un estado de bienestar en el que la persona realiza sus
                                            capacidades y es capaz de hacer frente al estrés normal de la vida, de
                                            trabajar y de contribuir a su comunidad."</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                        <div class="founder-img">
                                            <img src="landing/assets/img/icon/testimonial.png" alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Organización Mundial de la Salud</span>
                                            {{-- <p>Creative designer at Colorlib</p> --}}
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Testimonial -->
                                <div class="single-testimonial position-relative">
                                    <div class="testimonial-caption">
                                        <img src="assets/img/icon/quotes-sign.png" alt=""
                                            class="quotes-sign">
                                        <p>"El bienestar abarca un cuerpo sano, una mente sana y un espíritu tranquilo.
                                            Disfruta del viaje mientras trabajas en tu bienestar."</p>
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
                        <a class="popup-video btn-icon" href=""><i
                                class="fas fa-play"></i></a>
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
                                    <h3><a href="blog_details.html">Desayunos Saludables</a></h3>
                                    <P>Aprende a diseñar planes de desayuno saludables que te llenarán de energía y
                                        vitalidad, sin sacrificar sabor ni nutrición.</P>
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
                                    <h3><a href="blog_details.html">Alimentación Curativa</a></h3>
                                    <P>Explora el poder sanador de los alimentos en nuestra serie sobre cómo la dieta
                                        puede actuar como tu aliada en la prevención y tratamiento de enfermedades.</P>
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
                                    <h3><a href="blog_details.html">Equilibrio Diario</a></h3>
                                    <P>Descubre cómo mantener un equilibrio nutricional perfecto con nuestra guía de
                                        dieta diaria, diseñada para promover la salud y el bienestar a largo plazo.</P>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
        <!--? About Law Start-->
        {{-- <section class="about-low-area mt-30">
            <div class="container">
                <div class="about-cap-wrapper">
                    <div class="row">
                        <div class="col-xl-5  col-lg-6 col-md-10 offset-xl-1">
                            <div class="about-caption mb-50">
                                <!-- Section Tittle -->
                                <div class="section-tittle mb-35">
                                    <h2>100% satisfaction guaranteed.</h2>
                                </div>
                                <p>Almost before we knew it, we had left the ground</p>
                                <a href="about.html" class="border-btn">Make an Appointment</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <!-- about-img -->
                            <div class="about-img">
                                <div class="about-font-img">
                                    <img src="landing/assets/img/gallery/about2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- About Law End-->
    </main>
    <footer>
        <div class="footer-wrappr section-bg3" data-background="landing/assets/img/gallery/footer-bg.png">
            <div class="footer-area footer-padding ">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
                            <div class="single-footer-caption mb-50">
                                <!-- logo -->
                                <div class="footer-logo mb-25">
                                    <a href="index.html"><img src="landing/assets/img/logo/logo.png"
                                            alt=""></a>
                                </div>
                                <div class="header-area">
                                    <div class="main-header main-header2">
                                        <div class="menu-main d-flex align-items-center justify-content-start">
                                            <!-- Main-menu -->
                                            <div class="main-menu main-menu2">
                                                <nav>
                                                    <ul>
                                                        <li><a href="index.html">Inicio</a></li>
                                                        <li><a href="about.html">Mercado</a></li>
                                                        {{-- <li><a href="services.html">Comunidades</a></li> --}}
                                                        <li><a href="blog.html">Comunidades</a>
                                                            <ul class="submenu">
                                                                <li><a href="blog.html">Nutrición</a></li>
                                                                <li><a href="blog_details.html">Cultura Física</a></li>
                                                                <li><a href="elements.html">Sueño</a></li>
                                                                <li><a href="elements.html">Salud Mental</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="contact.html">Sobre Nosotros</a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social mt-50">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="https://bit.ly/sai4ull"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <div class="single-footer-caption">
                                <div class="footer-tittle mb-50">
                                    <h4>Newsletter</h4>
                                </div>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank"
                                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                            method="get" class="subscribe_form relative mail_part"
                                            novalidate="true">
                                            <input type="email" name="EMAIL" id="newsletter-form-email"
                                                placeholder=" Email Address " class="placeholder hide-on-focus"
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'Enter your email'">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit"
                                                    class="email_icon newsletter-submit button-contactForm">
                                                    Subscribirse
                                                </button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        {{-- <p>Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a
                                            pretium misem ut ipsum.</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row">
                            <div class="col-xl-10 ">
                                <div class="footer-copy-right">
                                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script> All rights reserved | This template is made with <i
                                            class="fa fa-heart" aria-hidden="true"></i> by <a
                                            href="https://colorlib.com" target="_blank">Colorlib</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
