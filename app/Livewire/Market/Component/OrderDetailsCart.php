<?php

namespace App\Livewire\Market\Component;

use App\Models\Order;
use App\Models\Product;
use App\Models\ShippingDetails;
use App\Models\User;
use Darryldecode\Cart\Cart;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Cashier;
use Livewire\Component;
use Livewire\Attributes\On;
use PhpParser\Node\Expr\Cast;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class OrderDetailsCart extends Component
{
    public $total;
    public $envio;
    public $cartItems;
    public $subtotal;
    public $shipping_details;






    private function updateSummary()
    {
        $sessionId = session()->getId();
        $subtotal = 0;

        $this->cartItems = CartFacade::session($sessionId)->getContent();

        //calcular subtotal preguntando precio actual del producto
        foreach ($this->cartItems as $c) {
            $subtotal += Product::find($c->id)->price * $c->quantity;
        }
        $this->subtotal = $subtotal;
        $this->envio = 0;
        $this->total = $this->subtotal + $this->envio;
    }


    public function mount()
    {
        $this->shipping_details = Auth::user()->shippingDetails;
        $this->updateSummary();
    }

    public function pay()
    {
        $sessionId = session()->getId();
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $cartItems = CartFacade::session($sessionId)->getContent();

        $lineItems = [];

        foreach ($cartItems as $item) {
            $product = Product::find($item->id);

            $lineItems[] = [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $product->name,
                        'images' => ['https://cdn.dribbble.com/users/586829/screenshots/4085732/untitled-2.jpg']
                    ],
                    'unit_amount' => $product->price * 100,
                ],
                'quantity' => $item->quantity,
            ];
        }

        $lineItems[] = [
            'price_data' => [
                'currency' => 'usd',
                'product_data' => [
                    'name' => 'Costo de envío',
                ],
                'unit_amount' => 3400, // El costo de envío se debe pasar en centavos (34 dólares)
            ],
            'quantity' => 1,
        ];

        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => $lineItems,
            'mode' => 'payment',
            'metadata' => [
                'order_id' => 1, // Incluir el ID de la orden como metadato
            ],
            'success_url' => route('home'),
            'cancel_url' => route('home'),
        ]);

        return redirect()->to($session->url);
    }



    #[On('cartModified')]
    public function modifiedCart()
    {
        $this->updateSummary();
    }

    #[On('cartDeleted')]
    public function deletedCart()
    {
        $this->updateSummary();
    }

    public function render()
    {
        return view('livewire.market.component.order-details-cart');
    }
}
