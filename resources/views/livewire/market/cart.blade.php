<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.market')] class extends Component {}; ?>


<section class="pt-5 pb-9">
    <div class="container-small cart">
        <h2 class="mb-6">Cart</h2>
        <div class="row g-5">
            <div class="col-12 col-lg-8">
                <div id="cartTable"
                    data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":10}'>
                    <div class="table-responsive scrollbar mx-n1 px-1">

                        {{-- CART TABLE --}}
                        @livewire('market.component.cart-table')

                    </div>
                </div>
            </div>

            {{-- CART ORDER DETAILS --}}
            @livewire('market.component.order-details-cart')

        </div>
    </div><!-- end of .container-->
</section>
