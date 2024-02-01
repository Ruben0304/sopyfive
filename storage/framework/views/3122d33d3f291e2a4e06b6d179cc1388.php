<table class="table fs--1 mb-0 border-top border-200">
    <thead>
        <tr>
            <th class="sort white-space-nowrap align-middle fs--2" scope="col">
            </th>
            <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:250px;">PRODUCTS</th>
            
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
<?php /**PATH C:\xampp3\htdocs\sopyfive\resources\views/livewire/market/component/cart-table.blade.php ENDPATH**/ ?>