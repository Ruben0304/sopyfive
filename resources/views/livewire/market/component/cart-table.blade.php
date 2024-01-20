<table class="table fs--1 mb-0 border-top border-200">
    <thead>
        <tr>
            <th class="sort white-space-nowrap align-middle fs--2" scope="col">
            </th>
            <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:250px;">PRODUCTS</th>
            <th class="sort align-middle" scope="col" style="width:80px;">COLOR
            </th>
            <th class="sort align-middle" scope="col" style="width:150px;">SIZE
            </th>
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

        {{-- ITEM CART --}}
        @livewire('market.component.cart-item')

        <tr class="cart-table-row btn-reveal-trigger">
            <td class="text-1100 fw-semi-bold ps-0 fs-0" colspan="6">Items subtotal
                :</td>
            <td class="text-1100 fw-bold text-end fs-0">$691</td>
            <td></td>
        </tr>
    </tbody>
</table>
