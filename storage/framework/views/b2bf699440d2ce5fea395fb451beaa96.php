<div class="col-12 col-lg-4">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-between-center mb-3">
                <h3 class="card-title mb-0">Summary</h3>
            </div><select class="form-select mb-3" aria-label="delivery type">

                <!--[if BLOCK]><![endif]--><?php if($shipping_details != null): ?>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $shipping_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($s->id); ?>"><?php echo e($s->address); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                    <option value="new">Agregar nuevo</option>
                <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->


            </select>
            <div>
                <div class="d-flex justify-content-between">
                    <p class="text-900 fw-semi-bold">Items subtotal :</p>
                    <p class="text-1100 fw-semi-bold">$<?php echo e($subtotal); ?></p>
                </div>
                
                
                <div class="d-flex justify-content-between">
                    <p class="text-900 fw-semi-bold">Subtotal :</p>
                    <p class="text-1100 fw-semi-bold">$<?php echo e($subtotal); ?></p>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="text-900 fw-semi-bold">Shipping Cost :</p>
                    <p class="text-1100 fw-semi-bold">$<?php echo e($envio); ?></p>
                </div>
            </div>
            
            <div class="d-flex justify-content-between border-y border-dashed py-3 mb-4">
                <h4 class="mb-0">Total :</h4>
                <h4 class="mb-">$<?php echo e($total); ?></h4>
            </div><button class="btn btn-primary w-100" wire:click='pay'>Ir a pagar $<?php echo e($total); ?><span
                    class="fas fa-chevron-right ms-1 fs--2"></span></button>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp3\htdocs\sopyfive\resources\views/livewire/market/component/order-details-cart.blade.php ENDPATH**/ ?>