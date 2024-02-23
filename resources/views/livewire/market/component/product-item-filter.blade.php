<div class="col-xl-9 col-lg-9 col-md-8 ">
    <!--? New Arrival Start -->
    <div class="new-arrival new-arrival2">
        <div class="row">
            @foreach ($productos as $producto)
                @livewire('market.component.product-card', ['producto' => $producto], key($producto->id))
            @endforeach
        </div>
        <!-- Button -->
        <div class="row justify-content-center">
            <div class="room-btn mt-20">
                {{ $productos->links() }}
            </div>
        </div>
    </div>
    <!--? New Arrival End -->
</div>












