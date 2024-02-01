<div class="col-lg-9 col-xxl-10">
    <div class="row gx-3 gy-6 mb-8">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('market.component.product-card', ['producto' => $producto]);

$__html = app('livewire')->mount($__name, $__params, $producto->id, $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
        
        <div class="d-flex justify-content-end">
            
      
            <?php echo e($productos->links()); ?>

        </div>

    </div>
</div>
<?php /**PATH C:\xampp3\htdocs\sopyfive\resources\views/livewire/market/component/product-item-filter.blade.php ENDPATH**/ ?>