<div class="col-12 col-sm-6 col-md-4 col-xxl-2">
    <div class="product-card-container h-100">
        <div class="position-relative text-decoration-none product-card h-100">
            <div class="d-flex flex-column justify-content-between h-100">
                <div>
                    <div class="border border-1 rounded-3 position-relative mb-3"><button
                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                            title="Agregar al carrito" wire:click='addToCart'><span
                                class="fa fa-shopping-cart d-block-hover"></span><span
                                class="fa fa-shopping-cart d-none-hover"></span></button><img class="img-fluid"
                            src="../../../assets/img/products/16.png" alt="" />
                        
                    </div><a class="stretched-link" href="product-details.html">
                        <h6 class="mb-2 lh-sm line-clamp-3 product-name"><?php echo e($producto->name); ?></h6>
                    </a>
                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="text-500 fw-semi-bold ms-1">(74 people rated)</span></p>
                </div>
                <div>
                    <div class="d-flex align-items-center mb-1">
                        
                        <h3 class="text-1100 mb-0">$<?php echo e($producto->price); ?></h3>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp3\htdocs\sopyfive\resources\views/livewire/market/component/product-card.blade.php ENDPATH**/ ?>