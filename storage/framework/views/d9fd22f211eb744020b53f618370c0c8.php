<div class="mb-6">
    <div class="d-flex flex-between-center mb-3">
        <h3>Top Electronics</h3><a class="fw-bold d-none d-md-block" href="#!">Explore more<span
                class="fas fa-chevron-right fs--1 ms-1"></span></a>
    </div>
    <div class="swiper-theme-container products-slider">
        <div class="swiper swiper-container theme-slider"
            data-swiper='{"slidesPerView":1,"spaceBetween":16,"breakpoints":{"450":{"slidesPerView":2,"spaceBetween":16},"576":{"slidesPerView":3,"spaceBetween":20},"768":{"slidesPerView":4,"spaceBetween":20},"992":{"slidesPerView":5,"spaceBetween":20},"1200":{"slidesPerView":6,"spaceBetween":16}}}'>
            <div class="swiper-wrapper">

                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('market.component.shop-item', ['nombre' => $item, 'precio' => '20']);

$__html = app('livewire')->mount($__name, $__params, 3, $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                
            </div>
        </div>
        <div class="swiper-nav">
            <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span></div>
            <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
        </div>
    </div><a class="fw-bold d-md-none" href="#!">Explore more<span
            class="fas fa-chevron-right fs--1 ms-1"></span></a>
</div>
<?php /**PATH C:\xampp3\htdocs\sopyfive\resources\views/livewire/market/component/deals.blade.php ENDPATH**/ ?>