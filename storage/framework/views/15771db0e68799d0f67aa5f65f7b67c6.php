<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

?>

<section class="pt-5 pb-9">
    <div class="container-small cart">
        <h2 class="mb-6">Cart</h2>
        <div class="row g-5">
            <div class="col-12 col-lg-8">
                <div id="cartTable"
                    data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":10}'>
                    <div class="table-responsive scrollbar mx-n1 px-1">

                        
                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('market.component.cart-table');

$__html = app('livewire')->mount($__name, $__params, '4ogxHen', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

                    </div>
                </div>
            </div>

            
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('market.component.order-details-cart');

$__html = app('livewire')->mount($__name, $__params, 'v8cqlGe', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

        </div>
    </div><!-- end of .container-->
</section><?php /**PATH C:\xampp3\htdocs\sopyfive\resources\views\livewire/market/cart.blade.php ENDPATH**/ ?>