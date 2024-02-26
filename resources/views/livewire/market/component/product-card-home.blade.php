<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
    <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
        <div class="popular-img">
            <img
                src="https://cdn-ldncj.nitrocdn.com/EldVvJZFVQuulLQbdMygrSKfqkefLYNg/assets/images/optimized/rev-9cd203e/www.vitafemme.es/wp-content/uploads/2023/01/71oFTFGXS1L._AC_SL1500_.jpg"
                alt="">
            <div class="favorit-items">
                <!-- <span class="flaticon-heart"></span> -->
                <img src="assets/img/gallery/favorit-card.png" wire:click="addToCart" alt="">
            </div>
        </div>
        <div class="popular-caption">
            <h3><a href="product_details.html">{{$producto->name}}</a></h3>
            <div class="rating mb-10">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <span>$ {{$producto->price}}</span>
        </div>
    </div>
</div>
