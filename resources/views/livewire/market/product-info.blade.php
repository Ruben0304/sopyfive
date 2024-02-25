<main>
    <!-- breadcrumb Start-->
    <div class="page-notification">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">shop</a></li>
                            <li class="breadcrumb-item"><a href="#">Product Details</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End-->
    <!--?  Details start -->
    <div class="directory-details pt-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="small-tittle mb-20">
                        <h2>{{$producto->name}}</h2>
                    </div>
                    <div class="directory-cap mb-40">

                        <p>${{$producto->price}}</p>
                        <p class="text-success fw-semi-bold fs-1 mb-2">{{$producto->stock > 5 ? "Disponible" : "Quedan muy pocos"}}</p>
                        <p>{{$producto->description}} </p>
                    </div>

                    <div class="gallery-img">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{asset('market/assets/img/gallery/gallery1.png')}}" class="mb-30" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img src="{{asset('market/assets/img/gallery/gallery2.png')}}" class="mb-30" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img src="assets/img/gallery/gallery3.png"  class="mb-30"alt="">
                            </div>
                            <div class="col-lg-6">
                                <img src="assets/img/gallery/gallery4.png"  class="mb-30"alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="map">
                        <img src="assets/img/gallery/map.png" alt="">
                    </div>
                    <div class="form-wrapper pt-80">
                        <div class="row ">
                            <div class="col-xl-12">
                                <div class="small-tittle mb-30">
                                    <h2>Coméntanos</h2>
                                </div>
                            </div>
                        </div>
                        <form id="contact-form" action="#" method="POST">
                            <div class="row">


                                <div class="col-lg-12">
                                    <div class="form-box message-icon mb-15">
                                        <textarea name="message" id="message" placeholder="Deja tu comentario acerca de este producto"></textarea>
                                    </div>
                                    <div class="submit-info">
                                        <button class="submit-btn2" type="submit">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


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


