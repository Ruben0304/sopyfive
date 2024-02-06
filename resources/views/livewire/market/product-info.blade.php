

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

            <div class="row g-5 mb-5 mb-lg-8" data-product-details="data-product-details">
                <div class="col-12 col-lg-6">
                    <div class="row g-3 mb-3">
                        <div class="col-12 col-md-2 col-lg-12 col-xl-2">
                            <div class="swiper-products-thumb swiper swiper-container theme-slider overflow-visible"
                                 id="swiper-products-thumb"></div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-12 col-xl-10">
                            <div class="d-flex align-items-center border rounded-3 text-center p-5 h-100">
                                <div class="swiper swiper-container theme-slider"
                                     data-thumb-target="swiper-products-thumb"
                                     data-products-swiper='{"slidesPerView":1,"spaceBetween":16,"thumbsEl":".swiper-products-thumb"}'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <button
                            class="btn btn-lg btn-warning rounded-pill w-100 fs--1 fs-sm-0" wire:click='addToCart'><span
                                class="fas fa-shopping-cart me-2"></span>Add to cart
                        </button>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                            <div class="d-flex flex-wrap">
                                <div class="me-2"><span class="fa fa-star text-warning"></span><span
                                        class="fa fa-star text-warning"></span><span
                                        class="fa fa-star text-warning"></span><span
                                        class="fa fa-star text-warning"></span><span
                                        class="fa fa-star text-warning"></span></div>
                                <p class="text-primary fw-semi-bold mb-2">6548 People rated and reviewed </p>
                            </div>
                            <h3 class="mb-3 lh-sm">{{$producto->name}}</h3>
                            <div class="d-flex flex-wrap align-items-start mb-3"><span
                                    class="badge bg-success fs--1 rounded-pill me-2 fw-semi-bold">#1 Best
                        seller</span><a class="fw-semi-bold" href="#!">in Phoenix sell analytics
                                    2021</a></div>
                            <div class="d-flex flex-wrap align-items-center">
                                <h1 class="me-3">${{$producto->price}}</h1>
                                {{--                    <p class="text-500 text-decoration-line-through fs-2 mb-0 me-3">$1499.99</p>--}}
                                {{--                    <p class="text-warning-500 fw-bolder fs-2 mb-0">10% off</p>--}}
                            </div>
                            <p class="text-success fw-semi-bold fs-1 mb-2">{{$producto->stock > 5 ? "Disponible" : "Quedan muy pocos"}}</p>
                            <p class="mb-2 text-800"><strong class="text-1000">Do you want it on Saturday, July
                                    29th?</strong> Choose <strong class="text-1000">Saturday Delivery </strong>at
                                checkout if you want your order delivered within 12 hours 43 minutes, <a class="fw-bold"
                                                                                                         href="#!">Details. </a><strong
                                    class="text-1000">Gift wrapping is
                                    available.</strong></p>
                            <p class="text-danger-500 fw-bold mb-5 mb-lg-0">Special offer ends in 23:00:45 hours</p>
                        </div>
                        <div>
                            <div class="mb-3">
                                <p class="fw-semi-bold mb-2 text-900">Color : <span class="text-1100"
                                                                                    data-product-color="data-product-color">Blue</span>
                                </p>
                                <div class="d-flex product-color-variants"
                                     data-product-color-variants="data-product-color-variants">
                                    <div class="rounded-1 border me-2 active" data-variant="Blue"
                                         data-products-images='["../../../assets/img/products/details/blue_front.png","../../../assets/img/products/details/blue_back.png","../../../assets/img/products/details/blue_side.png"]'>
                                        <img src="../../../assets/img/products/details/blue_front.png" alt=""
                                             width="38"/></div>
                                    <div class="rounded-1 border me-2" data-variant="Red"
                                         data-products-images='["../../../assets/img/products/details/red_front.png","../../../assets/img/products/details/red_back.png","../../../assets/img/products/details/red_side.png"]'>
                                        <img src="../../../assets/img/products/details/red_front.png" alt=""
                                             width="38"/></div>
                                    <div class="rounded-1 border me-2" data-variant="Green"
                                         data-products-images='["../../../assets/img/products/details/green_front.png","../../../assets/img/products/details/green_back.png","../../../assets/img/products/details/green_side.png"]'>
                                        <img src="../../../assets/img/products/details/green_front.png" alt=""
                                             width="38"/></div>
                                    <div class="rounded-1 border me-2" data-variant="Purple"
                                         data-products-images='["../../../assets/img/products/details/purple_front.png","../../../assets/img/products/details/purple_back.png","../../../assets/img/products/details/purple_side.png"]'>
                                        <img src="../../../assets/img/products/details/purple_front.png" alt=""
                                             width="38"/></div>
                                    <div class="rounded-1 border me-2" data-variant="Silver"
                                         data-products-images='["../../../assets/img/products/details/silver_front.png","../../../assets/img/products/details/silver_back.png","../../../assets/img/products/details/silver_side.png"]'>
                                        <img src="../../../assets/img/products/details/silver_front.png" alt=""
                                             width="38"/></div>
                                    <div class="rounded-1 border me-2" data-variant="Yellow"
                                         data-products-images='["../../../assets/img/products/details/yellow_front.png","../../../assets/img/products/details/yellow_back.png","../../../assets/img/products/details/yellow_side.png"]'>
                                        <img src="../../../assets/img/products/details/yellow_front.png" alt=""
                                             width="38"/></div>
                                    <div class="rounded-1 border me-2" data-variant="Orange"
                                         data-products-images='["../../../assets/img/products/details/orange_front.png","../../../assets/img/products/details/orange_back.png","../../../assets/img/products/details/orange_side.png"]'>
                                        <img src="../../../assets/img/products/details/orange_front.png"
                                             alt="" width="38"/></div>
                                </div>
                            </div>
                            <div class="row g-3 g-sm-5 align-items-end">
                                <div class="col-12 col-sm-auto">
                                    <p class="fw-semi-bold mb-2 text-900">Size : </p>
                                    <div class="d-flex align-items-center"><select class="form-select w-auto">
                                            <option value="44">44</option>
                                            <option value="22">22</option>
                                            <option value="18">18</option>
                                        </select><a class="ms-2 fs--1 fw-semi-bold" href="#!">Size chart</a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm">
                                    <p class="fw-semi-bold mb-2 text-900">Quantity : </p>
                                    <div class="d-flex justify-content-between align-items-end">
                                        <div class="d-flex flex-between-center" data-quantity="data-quantity">
                                            <button
                                                class="btn btn-phoenix-primary px-3" wire:click="decrement"><span
                                                    class="fas fa-minus"></span></button>
                                            <input
                                                class="form-control text-center input-spin-none bg-transparent border-0 outline-none"
                                                style="width:50px;" type="number" min="1" value="1"
                                                wire:model.live="quantity"/>
                                            <button class="btn btn-phoenix-primary px-3"
                                                     wire:click="increment"><span class="fas fa-plus"></span></button>
                                        </div>
                                        <button class="btn btn-phoenix-primary px-3 border-0"><span
                                                class="fas fa-share-alt fs-1"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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


                <div class="col-12 col-lg-7 col-xl-8">
                    <div class="tab-content" id="productTabContent">
                        <div class="tab-pane pe-lg-6 pe-xl-12 fade show active text-1100" id="tab-description"
                             role="tabpanel" aria-labelledby="description-tab">
                            <p class="mb-5">{{$producto->description}}</p>

                        </div>

                    </div>
                </div>

{{--                @livewire('market.component.similar-products')--}}


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
