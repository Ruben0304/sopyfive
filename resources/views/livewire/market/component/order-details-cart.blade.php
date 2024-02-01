<div class="col-12 col-lg-4">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-between-center mb-3">
                <h3 class="card-title mb-0">Summary</h3>
            </div><select class="form-select mb-3" aria-label="delivery type">

                @if ($shipping_details != null)
                    @foreach ($shipping_details as $s)
                        <option value="{{ $s->id }}">{{ $s->address }}</option>
                    @endforeach
                    <option value="new">Agregar nuevo</option>
                @endif


            </select>
            <div>
                <div class="d-flex justify-content-between">
                    <p class="text-900 fw-semi-bold">Items subtotal :</p>
                    <p class="text-1100 fw-semi-bold">${{ $subtotal }}</p>
                </div>
                {{-- <div class="d-flex justify-content-between">
                    <p class="text-900 fw-semi-bold">Discount :</p>
                    <p class="text-danger fw-semi-bold">-$59</p>
                </div> --}}
                {{-- <div class="d-flex justify-content-between">
                    <p class="text-900 fw-semi-bold">Tax :</p>
                    <p class="text-1100 fw-semi-bold">$126.20</p>
                </div> --}}
                <div class="d-flex justify-content-between">
                    <p class="text-900 fw-semi-bold">Subtotal :</p>
                    <p class="text-1100 fw-semi-bold">${{ $subtotal }}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="text-900 fw-semi-bold">Shipping Cost :</p>
                    <p class="text-1100 fw-semi-bold">${{ $envio }}</p>
                </div>
            </div>
            {{-- <div class="input-group mb-3"><input class="form-control" type="text" placeholder="Voucher" /><button
                    class="btn btn-phoenix-primary px-5">Apply</button>
            </div> --}}
            <div class="d-flex justify-content-between border-y border-dashed py-3 mb-4">
                <h4 class="mb-0">Total :</h4>
                <h4 class="mb-">${{ $total }}</h4>
            </div><button class="btn btn-primary w-100" wire:click='pay'>Ir a pagar ${{ $total }}<span
                    class="fas fa-chevron-right ms-1 fs--2"></span></button>
        </div>
    </div>
</div>