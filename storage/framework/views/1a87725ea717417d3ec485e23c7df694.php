<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.market')] class extends Component {}; ?>

<section class="pt-5 pb-9">
    <div class="container-small cart">
        <nav class="mb-2" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
                <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
                <li class="breadcrumb-item active" aria-current="page">Default</li>
            </ol>
        </nav>
        <h2 class="mb-5">Check out</h2>
        <div class="row">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <form wire:submit.loading='save'>
                    <h3 class="mb-5">Shipping Info</h3>
                    <div class="row g-4">
                        <div class="col-12"><label class="form-label fs-0 text-1000 ps-0 text-none" for="inputName">Full
                                name</label><input class="form-control" id="inputName" type="text"
                                placeholder="Full name" wire:model='name' /></div>
                        <div class="col-md-6"><label class="form-label fs-0 text-1000 ps-0 text-none"
                                for="inputPhone">Phone</label><input class="form-control" id="inputPhone" type="tel"
                                placeholder="+1234567890" wire:model='phone'/></div>
                        <div class="col-12"><label class="form-label fs-0 text-1000 ps-0 text-none"
                                for="inputAddress1">Address line 1</label><input class="form-control" id="inputAddress1"
                                type="text" placeholder="Address line 1" wire:model='address'/></div>
                        <div class="col-md-4"><label class="form-label fs-0 text-1000 ps-0 text-none"
                                for="inputCity">City</label><select class="form-select text-black" id="inputCity" wire:model='city'>
                                <option selected="selected">Van Nuys</option>
                                <option value="los-angeles">Los Angeles</option>
                                <option value="chicago">Chicago</option>
                                <option value="houston">Houston</option>
                            </select></div>
                        <div class="col-md-4"><label class="form-label fs-0 text-1000 ps-0 text-none"
                                for="inputState">State</label><select class="form-select text-black" id="inputState" wire:model='state'>
                                <option selected="selected">California</option>
                                <option value="Alaska">Alaska</option>
                                <option value="alabama">Alabama</option>
                                <option value="florida">Florida</option>
                            </select></div>
                        <div class="col-md-4 mb-3"><label class="form-label fs-0 text-1000 ps-0 text-none"
                                for="inputCountry">Country</label><select class="form-select text-black"
                                id="inputCountry" wire:model='country'>
                                <option selected="selected">USA</option>
                                <option value="uk">UK</option>
                                <option value="aus">AUS</option>
                                <option value="nz">NZ</option>
                            </select></div>
                        <div class="col-12"><button class="btn btn-primary px-8 px-sm-11 me-2"
                                type="submit">Save</button><button class="btn btn-phoenix-secondary text-nowrap"
                                type="submit">Exit Without Saving</button></div>
                    </div>
                </form>
            </div>
           
        </div>
    </div><!-- end of .container-->
</section>
<?php /**PATH C:\xampp3\htdocs\sopyfive\resources\views/livewire/market/shipping-details.blade.php ENDPATH**/ ?>