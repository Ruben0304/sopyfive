<header>
    <!--? Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1" style="display: flex">
                        <div class="logo">
                            <a href="index.html"><img src="landing/assets/img/logo/logo.png" alt=""
                                    height="90px"></a>
                        </div>

                    </div>

                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="menu-main d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">

                                <nav>

                                    <ul id="navigation">
                                        <li><a href="{{ route('home') }}">Inicio</a></li>
                                        <li><a href="{{ route('about') }}">Conócenos</a></li>
                                        {{-- <li><a href="services.html">Comunidades</a></li> --}}
                                        <li><a href="#">Tu comunidad</a>
                                            <ul class="submenu">
                                                <li><a href="{{route('comunidad',['id' =>2])}}">Nutrición</a></li>
                                                <li><a href="{{route('comunidad',['id' => 3])}}">Actividad Física</a></li>
                                                <li><a href="{{route('comunidad',['id' => 4])}}">Sueño y Relajación</a></li>
                                                <li><a href="{{route('comunidad',['id' => 5])}}">Manejo del Estrés</a></li>
                                                <li><a href="{{route('comunidad',['id' => 6])}}">Proyecto de Vida</a></li>



                                            </ul>
                                        </li>
                                        <li><a href="#">Shop (pronto)</a></li>
                                        <li><a href="#">Tus profesionales (pronto)</a></li>
                                        @auth
                                            <li><a  href="{{ route('logout') }}" id="salirMovil">Salir</a></li>
                                        @else
                                            <li ><a  href="{{ route('login') }}" id="entrarMovil">Entrar/Registrarse</a></li>

                                        @endauth


                                        @auth
                                            <li style="display:inline-flex; align-items:center"><a
                                                    href="{{ route('about') }}">{{Auth::user()->coins}} </a><img width="20" height="20"
                                                    src="landing/assets/img/coin.png" alt="circled-v" /> </li>
                                        @endauth

                                    </ul>
                                </nav>
                            </div>
                            <div class="header-right-btn f-right d-none d-lg-block ml-15" >
                                @auth
                                    <a href="{{ route('logout') }}" class="btn header-btn" >Salir</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn header-btn" >Entrar/Registrarse </a>
                                @endauth

{{--                                    <script>--}}

{{--                                        var salirMovil = document.getElementById('salirMovil');--}}
{{--                                        var entrarMovil = document.getElementById('entrarMovil');--}}


{{--                                        function setVideoSource() {--}}
{{--                                            if (window.innerWidth <= 600) {--}}
{{--                                                entrarMovil.style.display="block";--}}
{{--                                                salirMovil.style.display="block";--}}

{{--                                            } else {--}}
{{--                                                entrarMovil.style.display="none";--}}
{{--                                                salirMovil.style.display="none";--}}
{{--                                            }--}}
{{--                                        }--}}

{{--                                        window.onresize = setVideoSource;--}}
{{--                                        setVideoSource();--}}


{{--                                    </script>--}}
                            </div>
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
{{--    <livewire:auth.google-one-tap/>--}}

    <!-- Header End -->
</header>

{{--@push('styles')--}}
{{--    @media (min-width: 1024px) {--}}
{{--    .no-desktop {--}}
{{--    display: none;--}}
{{--    }--}}
{{--    }--}}
{{--@endpush--}}
