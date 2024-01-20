<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.market')] class extends Component {}; ?>

<div class="ecommerce-homepage pt-5 mb-9">


    <section class="py-0 px-xl-3">
        <div class="container px-xl-0 px-xxl-3">

            {{-- PROMO --}}
            <livewire:market.component.banners-promo>
                    {{-- OFERTAS --}}
                    @livewire('market.component.deals', ['titulo' => "Productos destacados", 'items' => ["Pedro","Daniela"] ], key(1))

                {{-- <div class="row flex-center mb-15 mt-11 gy-6">
                    <div class="col-auto"><img class="d-dark-none"
                            src="../../../assets/img/spot-illustrations/light_30.png" alt=""
                            width="305" /><img class="d-light-none"
                            src="../../../assets/img/spot-illustrations/dark_30.png" alt="" width="305" />
                    </div>
                    <div class="col-auto">
                        <div class="text-center text-lg-start">
                            <h3 class="text-1000 mb-2"><span class="fw-semi-bold">Want to have the </span>ultimate <br
                                    class="d-md-none" />customer experience?</h3>
                            <h1 class="display-3 fw-semi-bold mb-4">Become a <span
                                    class="text-primary fw-bolder">member
                                </span>today!</h1><a class="btn btn-lg btn-primary px-7"
                                href="../../../pages/authentication/simple/sign-up.html">Sign up<span
                                    class="fas fa-chevron-right ms-2 fs--1"></span></a>
                        </div>
                    </div>
                </div> --}}
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->

</div>
