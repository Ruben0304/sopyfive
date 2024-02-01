<nav class="ecommerce-navbar navbar-expand navbar-light bg-white justify-content-between"  >
    <div class="container-small d-flex flex-between-center" data-navbar="data-navbar">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('market.component.nav-categories', []);

$__html = app('livewire')->mount($__name, $__params, 'fPA98sX', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <ul class="navbar-nav justify-content-end align-items-center">
                <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link ps-0 active"
                        href="<?php echo e(route('mercado')); ?>" wire:navigate>Inicio</a></li>
                <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="<?php echo e(route('productos')); ?>"
                        wire:navigate>Productos</a></li>
                <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="<?php echo e(route('home')); ?>">Volver
                        a página inicial</a></li>



            </ul>
    </div>
</nav>
<?php /**PATH C:\xampp3\htdocs\sopyfive\resources\views/livewire/market/component/market-navbar.blade.php ENDPATH**/ ?>