<main>
    <!--? Slider Area Start-->
    <div class="slider-area">
        <video id="myVideo" autoplay muted loop playsinline style="position: absolute;width: 100%;height: 95%;object-fit: cover ">
        </video>
        
        <script>
            var video = document.getElementById('myVideo');
        
            function setVideoSource() {
                if (window.innerWidth <= 600) {
                    video.src = "landing/assets/video/m.mp4";
                } else {
                    video.src = "landing/assets/video/720.mp4";
                }
            }
        
            window.onresize = setVideoSource;
            setVideoSource();
        </script>
        

        <!-- Slider Single -->
        <livewire:landing.slider>

    </div>


    <section class="wantToWork-area section-bg3">
        <div class="container">
            <div class="wants-wrapper w-padding2">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-7 col-lg-9 col-md-8">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2>Qué encontrarás ?</h2>
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
                                    <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
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
                                        <img src="landing/assets/img/icon/oms.png" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Organización Mundial de la
                                            Salud</span>
                                        {{-- <p>Creative designer at Colorlib</p> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial position-relative">
                                <div class="testimonial-caption">
                                    <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
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
        {{-- <div class="container">
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
        </div> --}}
    </section>

</main>
