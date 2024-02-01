<div class="dropdown" wire:init><button class="btn text-900 ps-0 pe-5 text-nowrap dropdown-toggle dropdown-caret-none"
        data-category-btn="data-category-btn" data-bs-toggle="dropdown"><span
            class="fas fa-bars me-2"></span>Categorías</button>
    <div class="dropdown-menu border py-0 category-dropdown-menu" >
        <div class="card border-0 scrollbar" style="max-height: 657px;">
            <div class="card-body p-6 pb-3">
                <div class="row gx-7 gy-5 mb-5">
                    <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="filter"
                            style="stroke-width:3;"></span>
                        <h6 class="text-1000 mb-0 text-nowrap">Filtrar por categoría</h6>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('market.component.category-item');

$__html = app('livewire')->mount($__name, $__params, 'AXYS4vM', $__slots ?? [], get_defined_vars());

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
        </div>
    </div>
</div>
<?php /**PATH C:\xampp3\htdocs\sopyfive\resources\views/livewire/market/component/nav-categories.blade.php ENDPATH**/ ?>