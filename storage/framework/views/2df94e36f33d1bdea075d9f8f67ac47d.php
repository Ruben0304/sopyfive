<section class="pt-5 pb-9">
    <div class="container-small cart">
        <h2 class="mb-6">Cart</h2>
        <div class="row g-5">
            <div class="col-12 col-lg-8">
                <div id="cartTable"
                    data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":10}'>
                    <div class="table-responsive scrollbar mx-n1 px-1">

                        
                        <table class="table fs--1 mb-0 border-top border-200">
                            <thead>
                                <tr>
                                    <th class="sort white-space-nowrap align-middle fs--2" scope="col">
                                    </th>
                                    <th class="sort white-space-nowrap align-middle" scope="col"
                                        style="min-width:250px;">PRODUCTS</th>
                                    
                                    <th class="sort align-middle text-end" scope="col" style="width:300px;">PRICE
                                    </th>
                                    <th class="sort align-middle ps-5" scope="col" style="width:200px;">
                                        QUANTITY</th>
                                    <th class="sort align-middle text-end" scope="col" style="width:250px;">TOTAL
                                    </th>
                                    <th class="sort text-end align-middle pe-0" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list" id="cart-table-body">

                                

                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('market.component.cart-item', ['item' => $item]);

$__html = app('livewire')->mount($__name, $__params, $item->id, $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->



                                
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>

            
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('market.component.order-details-cart');

$__html = app('livewire')->mount($__name, $__params, 'apxMid7', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

        </div>
    </div><!-- end of .container-->
</section>
<?php /**PATH C:\xampp3\htdocs\sopyfive\resources\views/livewire/market/cart.blade.php ENDPATH**/ ?>