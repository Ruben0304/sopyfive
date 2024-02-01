<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

?>

<div class="content">
    <nav class="mb-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
            <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
            <li class="breadcrumb-item active">Default</li>
        </ol>
    </nav>

    
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('market.admin.add-product', []);

$__html = app('livewire')->mount($__name, $__params, 'dHcr3UC', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

        <footer class="footer position-absolute">
            <div class="row g-0 justify-content-between align-items-center h-100">
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for creating with Phoenix<span
                            class="d-none d-sm-inline-block"></span><span
                            class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2023 &copy;<a
                            class="mx-1" href="https://themewagon.com/">Themewagon</a>
                    </p>
                </div>
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 text-600">v1.13.0</p>
                </div>
            </div>
        </footer>
</div><?php /**PATH C:\xampp3\htdocs\sopyfive\resources\views\livewire/market/add-product.blade.php ENDPATH**/ ?>