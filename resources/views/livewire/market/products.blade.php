<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.market')] class extends Component {}; ?>

<section class="pt-5 pb-9">
    <div class="product-filter-container"><button class="btn btn-sm btn-phoenix-secondary text-700 mb-5 d-lg-none"
            data-phoenix-toggle="offcanvas" data-phoenix-target="#productFilterColumn"> <span
                class="fa-solid fa-filter me-2"></span>Filter</button>
        <div class="row">

            {{-- FILTROS --}}
            @livewire('market.component.filter')

            <div class="col-lg-9 col-xxl-10">
                <div class="row gx-3 gy-6 mb-8">


                    {{-- PRODUCTOS --}}
                    @livewire('market.component.product-item-filter')

                </div>

                {{-- pagination --}}
                <div class="d-flex justify-content-end">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination mb-0">
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <span class="fas fa-chevron-left"> </span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#"> <span class="fas fa-chevron-right"></span></a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</section>
