<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.market')] class extends Component {}; ?>

<div class="pt-5 pb-9">

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0">
        <div class="container-small">
            <nav class="mb-3" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Fashion</a></li>
                    <li class="breadcrumb-item"><a href="#">Womens fashion</a></li>
                    <li class="breadcrumb-item"><a href="#">Footwear</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Hills</li>
                </ol>
            </nav>

            @livewire('market.component.product-details')

        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->



    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0">
        <div class="container-small">
            <ul class="nav nav-underline mb-4" id="productTab" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="description-tab" data-bs-toggle="tab"
                        href="#tab-description" role="tab" aria-controls="tab-description"
                        aria-selected="true">Description</a></li>
                {{-- <li class="nav-item"><a class="nav-link" id="specification-tab" data-bs-toggle="tab"
                        href="#tab-specification" role="tab" aria-controls="tab-specification"
                        aria-selected="false">Specification</a></li>
                <li class="nav-item"><a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="#tab-reviews"
                        role="tab" aria-controls="tab-reviews" aria-selected="false">Ratings &amp; reviews</a>
                </li> --}}
            </ul>
            <div class="row gx-3 gy-7">


                @livewire('market.component.product-description')

                @livewire('market.component.similar-products')

                
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->

</div>

<!-- ============================================-->
<!-- <section> begin ============================-->
{{-- <section class="py-0 mb-9">
    <div class="container">
        <div class="d-flex flex-between-center mb-3">
            <div>
                <h3>Similar Products</h3>
                <p class="mb-0 text-700 fw-semi-bold">Essential for a better life</p>
            </div><button class="btn btn-sm btn-phoenix-primary">View all</button>
        </div>
        <div class="swiper-theme-container products-slider">
            <div class="swiper swiper-container theme-slider"
                data-swiper='{"slidesPerView":1,"spaceBetween":16,"breakpoints":{"450":{"slidesPerView":2,"spaceBetween":16},"768":{"slidesPerView":3,"spaceBetween":16},"992":{"slidesPerView":4,"spaceBetween":16},"1200":{"slidesPerView":5,"spaceBetween":16},"1540":{"slidesPerView":6,"spaceBetween":16}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="position-relative text-decoration-none product-card h-100">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div>
                                    <div class="border border-1 rounded-3 position-relative mb-3"><button
                                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Add to wishlist"><span
                                                class="fas fa-heart d-block-hover"></span><span
                                                class="far fa-heart d-none-hover"></span></button><img
                                            class="img-fluid" src="../../../assets/img/products/1.png"
                                            alt="" /></div><a class="stretched-link"
                                        href="product-details.html">
                                        <h6 class="mb-2 lh-sm line-clamp-3 product-name">Fitbit Sense Advanced
                                            Smartwatch with Tools for Heart Health, Stress Management &amp;amp; Skin
                                            Temperature Trends Carbon/Graphite, One Size (S &amp; L Bands)</h6>
                                    </a>
                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="text-500 fw-semi-bold ms-1">(59 people rated)</span></p>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center mb-1">
                                        <p class="me-2 text-900 text-decoration-line-through mb-0">$49.99</p>
                                        <h3 class="text-1100 mb-0">$34.99</h3>
                                    </div>
                                    <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="position-relative text-decoration-none product-card h-100">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div>
                                    <div class="border border-1 rounded-3 position-relative mb-3"><button
                                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Add to wishlist"><span
                                                class="fas fa-heart d-block-hover"></span><span
                                                class="far fa-heart d-none-hover"></span></button><img
                                            class="img-fluid" src="../../../assets/img/products/3.png"
                                            alt="" /></div><a class="stretched-link"
                                        href="product-details.html">
                                        <h6 class="mb-2 lh-sm line-clamp-3 product-name">Apple MacBook Pro 13
                                            inch-M1-8/256GB-Space Gray</h6>
                                    </a>
                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="text-500 fw-semi-bold ms-1">(13 people rated)</span></p>
                                </div>
                                <div>
                                    <p class="fs--1 text-1000 fw-bold mb-2">Apple care included</p>
                                    <div class="d-flex align-items-center mb-1">
                                        <p class="me-2 text-900 text-decoration-line-through mb-0">$1299.00</p>
                                        <h3 class="text-1100 mb-0">$1149.00</h3>
                                    </div>
                                    <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="position-relative text-decoration-none product-card h-100">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div>
                                    <div class="border border-1 rounded-3 position-relative mb-3"><button
                                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Add to wishlist"><span
                                                class="fas fa-heart d-block-hover"></span><span
                                                class="far fa-heart d-none-hover"></span></button><img
                                            class="img-fluid" src="../../../assets/img/products/5.png"
                                            alt="" /></div><a class="stretched-link"
                                        href="product-details.html">
                                        <h6 class="mb-2 lh-sm line-clamp-3 product-name">Razer Kraken v3 x Wired 7.1
                                            Surroung Sound Gaming headset</h6>
                                    </a>
                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="text-500 fw-semi-bold ms-1">(64 people rated)</span></p>
                                </div>
                                <div>
                                    <h3 class="text-1100">$59.00</h3>
                                    <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">1 colors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="position-relative text-decoration-none product-card h-100">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div>
                                    <div class="border border-1 rounded-3 position-relative mb-3"><button
                                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Add to wishlist"><span
                                                class="fas fa-heart d-block-hover"></span><span
                                                class="far fa-heart d-none-hover"></span></button><img
                                            class="img-fluid" src="../../../assets/img/products/2.png"
                                            alt="" /><span
                                            class="badge bg-success fs--2 product-verified-badge">Verified<span
                                                class="fas fa-check ms-1"></span></span></div><a
                                        class="stretched-link" href="product-details.html">
                                        <h6 class="mb-2 lh-sm line-clamp-3 product-name">iPhone 13 pro max-Pacific
                                            Blue, 128GB storage</h6>
                                    </a>
                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="text-500 fw-semi-bold ms-1">(32 people rated)</span></p>
                                </div>
                                <div>
                                    <p class="fs--1 text-1000 fw-bold mb-2">Stock limited</p>
                                    <div class="d-flex align-items-center mb-1">
                                        <p class="me-2 text-900 text-decoration-line-through mb-0">$899.99</p>
                                        <h3 class="text-1100 mb-0">$855.00</h3>
                                    </div>
                                    <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">5 colors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="position-relative text-decoration-none product-card h-100">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div>
                                    <div class="border border-1 rounded-3 position-relative mb-3"><button
                                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Add to wishlist"><span
                                                class="fas fa-heart d-block-hover"></span><span
                                                class="far fa-heart d-none-hover"></span></button><img
                                            class="img-fluid" src="../../../assets/img/products/16.png"
                                            alt="" /></div><a class="stretched-link"
                                        href="product-details.html">
                                        <h6 class="mb-2 lh-sm line-clamp-3 product-name">Apple AirPods Pro</h6>
                                    </a>
                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="text-500 fw-semi-bold ms-1">(39 people rated)</span></p>
                                </div>
                                <div>
                                    <p class="fs--1 text-1000 fw-bold mb-1">free with iPhone 5s</p>
                                    <p class="fs--1 text-700 mb-2">Ships to Canada</p>
                                    <h3 class="text-1100">$59.00</h3>
                                    <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">3 colors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="position-relative text-decoration-none product-card h-100">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div>
                                    <div class="border border-1 rounded-3 position-relative mb-3"><button
                                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Add to wishlist"><span
                                                class="fas fa-heart d-block-hover"></span><span
                                                class="far fa-heart d-none-hover"></span></button><img
                                            class="img-fluid" src="../../../assets/img/products/10.png"
                                            alt="" /></div><a class="stretched-link"
                                        href="product-details.html">
                                        <h6 class="mb-2 lh-sm line-clamp-3 product-name">Apple Magic Mouse (Wireless,
                                            Rechargable) - Silver</h6>
                                    </a>
                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="text-500 fw-semi-bold ms-1">(6 people rated)</span></p>
                                </div>
                                <div>
                                    <p class="fs--1 text-1000 fw-bold mb-1">Bundle availabe</p>
                                    <p class="fs--1 text-700 mb-2">Charger not included</p>
                                    <h3 class="text-1100">$89.00</h3>
                                    <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="position-relative text-decoration-none product-card h-100">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div>
                                    <div class="border border-1 rounded-3 position-relative mb-3"><button
                                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Add to wishlist"><span
                                                class="fas fa-heart d-block-hover"></span><span
                                                class="far fa-heart d-none-hover"></span></button><img
                                            class="img-fluid" src="../../../assets/img/products/6.png"
                                            alt="" /></div><a class="stretched-link"
                                        href="product-details.html">
                                        <h6 class="mb-2 lh-sm line-clamp-3 product-name">PlayStation 5 DualSense
                                            Wireless Controller</h6>
                                    </a>
                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="text-500 fw-semi-bold ms-1">(67 people rated)</span></p>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center mb-1">
                                        <p class="me-2 text-900 text-decoration-line-through mb-0">$125.00</p>
                                        <h3 class="text-1100 mb-0">$89.00</h3>
                                    </div>
                                    <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-nav">
                <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span></div>
                <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
            </div>
        </div>
    </div><!-- end of .container-->
</section> --}}
