<section class="pt-5 pb-9">
    <div class="product-filter-container"><button class="btn btn-sm btn-phoenix-secondary text-700 mb-5 d-lg-none"
            data-phoenix-toggle="offcanvas" data-phoenix-target="#productFilterColumn"> <span
                class="fa-solid fa-filter me-2"></span>Filtrar</button>
        <div class="row">

            {{-- FILTROS --}}
            @livewire('market.component.filter')





            {{-- PRODUCTOS --}}

            @livewire('market.component.product-item-filter')




        </div>
    </div>
</section>
