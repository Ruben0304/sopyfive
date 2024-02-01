<div class="dropdown" wire:init><button class="btn text-900 ps-0 pe-5 text-nowrap dropdown-toggle dropdown-caret-none"
        data-category-btn="data-category-btn" data-bs-toggle="dropdown"><span
            class="fas fa-bars me-2"></span>Categorías</button>
    <div class="dropdown-menu border py-0 category-dropdown-menu" >
        <div class="card border-0 scrollbar" style="max-height: 657px;">
            <div class="card-body p-6 pb-3">
                <div class="row gx-7 gy-5 mb-5">
                    <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="filter"
                            style="stroke-width:3;"></span>
                        <h6 class="text-1000 mb-0 text-nowrap">Filtrar por categoría</h6>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        @livewire('market.component.category-item')
                    </div>
                </div>
                {{-- <div class="text-center border-top pt-3"><a class="fw-bold" href="#!">See all
                    Categories<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
            </div> --}}
            </div>
        </div>
    </div>
</div>
