<main>
    <!-- breadcrumb Start-->
    <div class="page-notification">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- listing Area Start -->

    <div class="category-area">

        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="section-tittle mb-50">
                        <h2>Compra con nosotros</h2>
                        <p>Productos de excelente calidad</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--? Left content -->
                @livewire('market.component.filter')
                <!--?  Right content -->
                @livewire('market.component.product-item-filter', ['search' => $search])
            </div>
        </div>
    </div>
    <!-- listing-area Area End -->
    <!--? Popular Items Start -->

{{--    <div class="popular-items">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--                    <div class="single-popular-items mb-50 text-center">--}}
{{--                        <div class="popular-img">--}}
{{--                            <img src="assets/img/gallery/popular1.png" alt="">--}}
{{--                            <div class="img-cap">--}}
{{--                                <span>Glasses</span>--}}
{{--                            </div>--}}
{{--                            <div class="favorit-items">--}}
{{--                                <a href="shop.html" class="btn">Shop Now</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--                    <div class="single-popular-items mb-50 text-center">--}}
{{--                        <div class="popular-img">--}}
{{--                            <img src="assets/img/gallery/popular2.png" alt="">--}}
{{--                            <div class="img-cap">--}}
{{--                                <span>Watches</span>--}}
{{--                            </div>--}}
{{--                            <div class="favorit-items">--}}
{{--                                <a href="shop.html" class="btn">Shop Now</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--                    <div class="single-popular-items mb-50 text-center">--}}
{{--                        <div class="popular-img">--}}
{{--                            <img src="assets/img/gallery/popular3.png" alt="">--}}
{{--                            <div class="img-cap">--}}
{{--                                <span>Jackets</span>--}}
{{--                            </div>--}}
{{--                            <div class="favorit-items">--}}
{{--                                <a href="shop.html" class="btn">Shop Now</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--                    <div class="single-popular-items mb-50 text-center">--}}
{{--                        <div class="popular-img">--}}
{{--                            <img src="assets/img/gallery/popular4.png" alt="">--}}
{{--                            <div class="img-cap">--}}
{{--                                <span>Clothes</span>--}}
{{--                            </div>--}}
{{--                            <div class="favorit-items">--}}
{{--                                <a href="shop.html" class="btn">Shop Now</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Popular Items End -->
    <!--? Services Area Start -->
    <div class="categories-area section-padding40 gray-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat mb-50">
                        <div class="cat-icon">
                            <img src="assets/img/icon/services1.svg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5>Fast & Free Delivery</h5>
                            <p>Free delivery on all orders</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat mb-50">
                        <div class="cat-icon">
                            <img src="assets/img/icon/services2.svg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5>Fast & Free Delivery</h5>
                            <p>Free delivery on all orders</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat mb-30">
                        <div class="cat-icon">
                            <img src="assets/img/icon/services3.svg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5>Fast & Free Delivery</h5>
                            <p>Free delivery on all orders</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat">
                        <div class="cat-icon">
                            <img src="assets/img/icon/services4.svg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5>Fast & Free Delivery</h5>
                            <p>Free delivery on all orders</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--? Services Area End -->
</main>

            {{-- FILTROS --}}






            {{-- PRODUCTOS --}}






