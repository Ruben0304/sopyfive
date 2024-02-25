<tr class="cart-table-row btn-reveal-trigger">
    <td class="align-middle white-space-nowrap py-0"><a class="d-block border rounded-2" href="product-details.html"><img
                src="assets/img/gallery/favorit-card.png" alt="" width="53" /></a></td>
    <td class="products align-middle" ><a class="fw-semi-bold mb-0 line-clamp-2"
            href="product-details.html" style="color: black"> {{ $item->name }}</a></td>
    {{-- <td class="color align-middle white-space-nowrap fs--1 text-900">Glossy
        black</td>
    <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">
        XL</td> --}}
    <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">${{ $price }}
    </td>
    <td class="quantity align-middle fs-0 ps-5" style="height: 10px">
        <div class="input-group input-group-sm flex-nowrap" data-quantity="data-quantity">
{{--            <button class="btn btn-sm px-2" data-type="minus" style="background-color: #606060" >-</button>--}}
            <input class="form-control text-center input-spin-none bg-transparent border-0 px-0" type="number"
                min="1" wire:model.live="quantity" style="font-size: 13px" >
            <div>
                @error('quantity') <span class="error">{{ $message }}</span> @enderror
            </div>
{{--            <button class="btn btn-sm px-2"  data-type="plus" style="background-color: #606060">+</button>--}}
        </div>
    </td>
    <div>
        @error('quantity') <span class="error">{{ $message }}</span> @enderror
    </div>
    <td class="total align-middle fw-bold text-1000 text-end">${{ is_numeric($quantity) ? $price * $quantity : 0}}</td>
    <td class="align-middle white-space-nowrap text-end pe-0 ps-3">
        <a href="#" wire:click='removeFromCart' style="color: maroon;"><span class="fas fa-trash"></span></a>
{{--        <button--}}
{{--            class="btn btn-sm text-500 hover-text-600 me-2"  style="background-color: maroon;"><span class="fas fa-trash"></span></button></td>--}}
</tr>
