<header>
    <!-- Header Start -->
    <div class="header-area ">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper d-flex align-items-center justify-content-between">
                    <div class="header-left d-flex align-items-center">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="{{asset('landing/assets/img/logo/logo.png')}}" alt="" height="90px"></a>
                        </div>
                        <!-- Main-menu -->

                    </div>
                    <div class="header-left d-flex align-items-center">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="{{route('market')}}" style="color: #7D525E; font-weight: bold;text-transform: uppercase">Mercado</a></li>
                                    <li><a href="#"  style="color: #7D525E; font-weight: bold;text-transform: uppercase">5 pilares</a>
                                        <ul class="submenu">
                                            @foreach($comunities as $c)
                                            <li><a style="color: #7D525E;text-transform: uppercase" href="#" >{{$c->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a style="color: #7D525E; font-weight: bold;text-transform: uppercase" href="#" style="color: #112957">Categorias</a>
                                        <ul class="submenu">
                                            <li><a style="color: #7D525E;text-transform: uppercase" href="#">x</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="{{route('productos')}}" style="color: #7D525E; font-weight: bold;text-transform: uppercase">Explorar</a></li>
                                    <li><a href="{{route('home')}}"  style="color: #7D525E; font-weight: bold;text-transform: uppercase">Volver a inicio</a></li>


                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-right1 d-flex align-items-center">
                        <!-- Social -->
                        <div class="header-social d-none d-md-block">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                        <!-- Search Box -->
                        <div class="search d-none d-md-block">
                            <ul class="d-flex align-items-center">
                                <li class="mr-15">
                                    <div class="nav-search search-switch">
                                        <i class="ti-search"></i>
                                    </div>
                                </li>
                                <li>
                                    <a href="{{route('cart')}}">
                                    <div class="card-stor">
                                        <img src="{{asset('market/assets/img/gallery/card.svg')}}" alt="">
                                        <livewire:market.component.nav-cart>
                                    </div>
                                    </a>
                                </li>
                            </ul>
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
