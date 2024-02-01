<div class="col-lg-9 col-xxl-10">
    <div class="row gx-3 gy-6 mb-8">
        @foreach ($productos as $producto)
            @livewire('market.component.product-card', ['producto' => $producto], key($producto->id))
        @endforeach
        {{-- pagination --}}
        <div class="d-flex justify-content-end">
            {{-- <nav aria-label="Page navigation example">
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
        </nav> --}}
      
            {{ $productos->links() }}
        </div>

    </div>
</div>
