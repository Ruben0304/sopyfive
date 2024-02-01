<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

use App\Models\Product;

?>

<section class="pt-5 pb-9">
    <div class="product-filter-container"><button class="btn btn-sm btn-phoenix-secondary text-700 mb-5 d-lg-none"
            data-phoenix-toggle="offcanvas" data-phoenix-target="#productFilterColumn"> <span
                class="fa-solid fa-filter me-2"></span>Filtrar</button>
        <div class="row">

            
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('market.component.filter');

$__html = app('livewire')->mount($__name, $__params, 'defeRHg', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('market.component.product-item-filter');

$__html = app('livewire')->mount($__name, $__params, 'dqGw6Gv', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                 
              

               
        </div>
    </div>
</section><?php /**PATH C:\xampp3\htdocs\sopyfive\resources\views\livewire/market/products.blade.php ENDPATH**/ ?>