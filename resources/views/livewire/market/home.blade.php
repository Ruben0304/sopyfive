<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.market')] class extends Component {}; ?>

<div class="ecommerce-homepage pt-5 mb-9">

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    {{-- <section class="py-0">
        <div class="container-small">
            <div class="scrollbar">
                <div class="d-flex justify-content-between"><a class="icon-nav-item" href="#!">
                        <div class="icon-container mb-2 bg-warning-100 light"><span
                                class="fs-4 uil uil-star text-warning"></span></div>
                        <p class="nav-label">Deals</p>
                    </a><a class="icon-nav-item" href="#!">
                        <div class="icon-container mb-2"><span class="fs-4 uil uil-shopping-bag"></span></div>
                        <p class="nav-label">Grocery</p>
                    </a><a class="icon-nav-item" href="#!">
                        <div class="icon-container mb-2"><span class="fs-4 uil uil-watch-alt"></span></div>
                        <p class="nav-label">Fashion</p>
                    </a><a class="icon-nav-item" href="#!">
                        <div class="icon-container mb-2"><span class="fs-4 uil uil-mobile-android"></span></div>
                        <p class="nav-label">Mobile</p>
                    </a><a class="icon-nav-item" href="#!">
                        <div class="icon-container mb-2"><span class="fs-4 uil uil-monitor"></span></div>
                        <p class="nav-label">Electronics</p>
                    </a><a class="icon-nav-item" href="#!">
                        <div class="icon-container mb-2"><span class="fs-4 uil uil-estate"></span></div>
                        <p class="nav-label">Home</p>
                    </a><a class="icon-nav-item" href="#!">
                        <div class="icon-container mb-2"><span class="fs-4 uil uil-lamp"></span></div>
                        <p class="nav-label">Dining</p>
                    </a><a class="icon-nav-item" href="#!">
                        <div class="icon-container mb-2"><span class="fs-4 uil uil-gift"></span></div>
                        <p class="nav-label">Gifts</p>
                    </a><a class="icon-nav-item" href="#!">
                        <div class="icon-container mb-2"><span class="fs-4 uil uil-wrench"></span></div>
                        <p class="nav-label">Tools</p>
                    </a><a class="icon-nav-item" href="#!">
                        <div class="icon-container mb-2"><span class="fs-4 uil uil-plane-departure"></span></div>
                        <p class="nav-label">Travel</p>
                    </a><a class="icon-nav-item" href="#!">
                        <div class="icon-container mb-2"><span class="fs-4 uil uil-palette"></span></div>
                        <p class="nav-label">Others</p>
                    </a></div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================--> --}}
    <!-- ============================================-->
    <!-- ============================================-->
    <!-- <section> begin ============================-->
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
