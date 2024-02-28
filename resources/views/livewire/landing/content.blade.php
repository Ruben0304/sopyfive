<main>
    <!--? Slider Area Start-->
    <div class="slider-area">
        <div id="loading-spinner" style="display: none;">
            Cargando...
        </div>

        <video id="myVideo" autoplay muted loop playsinline style="position: absolute; width: 100%; height: 95%; object-fit: cover;"></video>

        <script>
            var video = document.getElementById('myVideo');
            var spinner = document.getElementById('loading-spinner');

            function setVideoSource() {
                if (window.innerWidth <= 600) {
                    video.src = "landing/assets/video/m.mp4";
                } else {
                    video.src = "landing/assets/video/720.mp4";
                }
            }

            video.onloadeddata = function() {
                spinner.style.display = 'none'; // Oculta el spinner cuando el video se haya cargado
            };

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
                            <h2>¿ Qué encontrarás ?</h2>
                            <p style="font-size: 16px"> Todo lo que necesitas para tu bienestar en un solo lugar,ahorrando tiempo y dinero en
                                búsquedas dispersas: desde expertos y comunidad, hasta recursos, tienda y mucho más.
                            </p>
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
                            <img src="landing/assets/img/icon/Doctor.png" alt="">
                        </div>

                        <div class="cat-cap" >
                            <h5><a href="#">Consultas</a></h5>
                            <p style="text-align: initial;">Conéctate con médicos expertos en medicina
                                funcional y
                                síndrome de ovario
                                poliquístico, obteniendo consejos personalizados
                                y
                                suplementos adecuados.</p>
                            <a href="#" class="plus-btn"><i class="ti-arrow-up"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <img src="landing/assets/img/icon/Group.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="https://www.instagram.com/dra_yelisancho/">Comunidad</a></h5>
                            <p style="text-align: initial;">Explora un espacio único para nutrición, cultura
                                física,
                                sueño y salud mental, con
                                comunidades activas, chat en vivo y diálogo
                                interactivo.</p>
                            <a href="https://www.instagram.com/dra_yelisancho/" class="plus-btn"><i class="ti-arrow-up"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <img src="landing/assets/img/icon/Shop.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="{{route('market')}}">Mercado</a></h5>
                            <p style="text-align: initial;">Descubre suplementos especializados para el
                                manejo del
                                síndrome de ovario
                                poliquístico, diseñados con principios de
                                medicina funcional
                                para un bienestar
                                integral.</p>
                            <a href="{{route('market')}}" class="plus-btn"><i class="ti-arrow-up"></i></a>
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
                                    <img src="{{asset('assets/img/icon/quotes-sign.png')}}" alt="" class="quotes-sign">
                                    <p>"En la oscuridad de la incertidumbre, recordemos siempre que somos más fuertes de lo que creemos y que cada paso que damos hacia adelante nos acerca un poco más a la luz que brilla en nuestro camino hacia el bienestar y la plenitud."</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-img">
                                        <img src="{{asset('landing/assets/img/gallery/perfil_IG.jpg')}}" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Dra. Yeli Sancho</span>
                                        {{-- <p>Creative designer at Colorlib</p> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
{{--                            <div class="single-testimonial position-relative">--}}
{{--                                <div class="testimonial-caption">--}}
{{--                                    <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">--}}
{{--                                    <p>"El bienestar abarca un cuerpo sano, una--}}
{{--                                        mente sana y--}}
{{--                                        un espíritu tranquilo.--}}
{{--                                        Disfruta del viaje mientras trabajas en--}}
{{--                                        tu--}}
{{--                                        bienestar."</p>--}}
{{--                                </div>--}}
{{--                                <!-- founder -->--}}
{{--                                <div class="testimonial-founder d-flex align-items-center">--}}
{{--                                    <div class="founder-img">--}}
{{--                                        <img src="landing/assets/img/icon/testimonial.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="founder-text">--}}
{{--                                        <span>Laurette Gagnon Beaulieu</span>--}}
{{--                                        <p>“Defensora del bienestar y autora</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
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
             style="width: 80%;
            border-radius: 25px;
            margin-left: 10%;
            margin-top: 40px">

                <iframe style="width: 100%; height: 100%" src="https://www.youtube.com/embed/RFI1zc_lH_s" title="Polycystic Ovary Syndrome PCOS: Cause, symptoms and treatment👩🏻‍⚕️l Dra. Pau Zúñiga" frameborder="0" allow="accelerometer;clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

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
