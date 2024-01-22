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
                                        <li><a href="{{route('mercado')}}" >Mercado</a></li>
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