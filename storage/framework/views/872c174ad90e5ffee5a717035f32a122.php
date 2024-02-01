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
                                        <li><a href="<?php echo e(route('home')); ?>">Inicio</a></li>
                                        <li><a href="<?php echo e(route('mercado')); ?>">Mercado</a></li>
                                        
                                        <li><a href="blog.html">Comunidades</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Nutrición</a></li>
                                                <li><a href="blog_details.html">Actividad Física</a></li>
                                                <li><a href="elements.html">Sueño y Relajación</a></li>
                                                <li><a href="elements.html">Manejo del Estrés</a></li>
                                                <li><a href="elements.html">Proyecto de Vida</a></li>



                                            </ul>
                                        </li>
                                        <li><a href="<?php echo e(route('about')); ?>">Sobre Nosotros</a></li>
                                        <!--[if BLOCK]><![endif]--><?php if(auth()->guard()->check()): ?>
                                            <li><a  href="<?php echo e(route('logout')); ?>">Salir</a></li>
                                        <?php else: ?>
                                            <li ><a  href="<?php echo e(route('login')); ?>">Entrar</a></li>
                                            <li ><a href="<?php echo e(route('register')); ?>">Registrarse</a></li>
                                        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->


                                        <!--[if BLOCK]><![endif]--><?php if(auth()->guard()->check()): ?>
                                            <li style="display:inline-flex; align-items:center"><a
                                                    href="<?php echo e(route('about')); ?>">0.0 </a><img width="20" height="20"
                                                    src="landing/assets/img/coin.png" alt="circled-v" /> </li>
                                        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->

                                    </ul>
                                </nav>
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
    <!-- Header End -->
</header>








<?php /**PATH C:\xampp3\htdocs\sopyfive\resources\views/livewire/landing/navigation.blade.php ENDPATH**/ ?>