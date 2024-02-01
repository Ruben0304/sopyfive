<tr class="cart-table-row btn-reveal-trigger">
    <td class="align-middle white-space-nowrap py-0"><a class="d-block border rounded-2" href="product-details.html"><img
                src="../../../assets/img/products/2.png" alt="" width="53" /></a></td>
    <td class="products align-middle"><a class="fw-semi-bold mb-0 line-clamp-2"
            href="product-details.html"><?php echo e($item->name); ?></a></td>
    
    <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$<?php echo e($price); ?>

    </td>
    <td class="quantity align-middle fs-0 ps-5">
        <div class="input-group input-group-sm flex-nowrap" data-quantity="data-quantity">
            <button class="btn btn-sm px-2" wire:click="decrement" data-type="minus">-</button>
            <input class="form-control text-center input-spin-none bg-transparent border-0 px-0" type="number"
                min="1" wire:model="quantity" aria-label="Amount (to the nearest dollar)">
            <button class="btn btn-sm px-2" wire:click="increment" data-type="plus">+</button>
        </div>
    </td>

    <td class="total align-middle fw-bold text-1000 text-end">$<?php echo e($price * $quantity); ?></td>
    <td class="align-middle white-space-nowrap text-end pe-0 ps-3"><button
            class="btn btn-sm text-500 hover-text-600 me-2" wire:click='removeFromCart'><span class="fas fa-trash"></span></button></td>
</tr>
<?php /**PATH C:\xampp3\htdocs\sopyfive\resources\views/livewire/market/component/cart-item.blade.php ENDPATH**/ ?>