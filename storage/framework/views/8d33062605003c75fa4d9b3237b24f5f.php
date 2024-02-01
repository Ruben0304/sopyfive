<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

?>

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

            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('market.component.product-details');

$__html = app('livewire')->mount($__name, $__params, 'eYjgpLm', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

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
                
            </ul>
            <div class="row gx-3 gy-7">


                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('market.component.product-description');

$__html = app('livewire')->mount($__name, $__params, 'aj3RVFO', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('market.component.similar-products');

$__html = app('livewire')->mount($__name, $__params, 'yzC9kl0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

                
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->

</div>

<!-- ============================================-->
<!-- <section> begin ============================-->
<?php /**PATH C:\xampp3\htdocs\sopyfive\resources\views\livewire/market/product-info.blade.php ENDPATH**/ ?>