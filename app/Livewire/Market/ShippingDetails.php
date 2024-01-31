<?php

namespace App\Livewire\Market;

use App\Models\ShippingDetails as ModelsShippingDetails;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;

class ShippingDetails extends Component
{

    #[Layout('layouts.market')]
    public $user_id;
    public $name;
    public $phone;
    public $address;
    public $city;
    public $country;
    public $state;
    public $references = null;

    public function save()
    {
        
        $this->user_id = Auth::user()->id;
        ModelsShippingDetails::create($this->only(['user_id','name', 'phone', 'address', 'city', 'state','country', 'references']));
        $this->reset();
    }


    public function render()
    {
        return view('livewire.market.shipping-details');
    }
}
