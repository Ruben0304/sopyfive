<section class="py-0" wire:refresh>
    <div class="container-small">
        <div class="ecommerce-topbar" >
            <nav class="navbar navbar-expand-lg navbar-light px-0">
                <div class="row gx-0 gy-2 w-100 flex-between-center">
                    <div class="col-auto"><a class="text-decoration-none" href="../../../index-2.html">
                            <div class="d-flex align-items-center"><img src="../../../assets/img/icons/logo.png"
                                    alt="phoenix" width="27" />
                                <p class="logo-text ms-2">SOP&Five</p>
                            </div>
                        </a></div>
                    <div class="col-auto order-md-1">
                        <ul class="navbar-nav navbar-nav-icons flex-row me-n2">
                            <li class="nav-item d-flex align-items-center">
                                
                            </li>
                            <li class="nav-item"><a class="nav-link px-2 icon-indicator icon-indicator-primary"
                                    href="<?php echo e(route('cart')); ?>" wire:navigate role="button"><span class="text-700"
                                        data-feather="shopping-cart" style="height:20px;width:20px;"></span><span
                                        class="icon-indicator-number"><?php echo e($cartSize); ?></span></a></li>

                            
                            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('market.component.nav-orders', []);

$__html = app('livewire')->mount($__name, $__params, 'QJgFQr6', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('market.component.nav-user', []);

$__html = app('livewire')->mount($__name, $__params, 'XADs1TL', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                            

                        </ul>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="search-box ecommerce-search-box w-100">
                            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                                    class="form-control search-input search form-control-sm" type="search"
                                    placeholder="Search" aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div><!-- end of .container-->
</section>
<?php /**PATH C:\xampp3\htdocs\sopyfive\resources\views/livewire/market/layout/navigation.blade.php ENDPATH**/ ?>