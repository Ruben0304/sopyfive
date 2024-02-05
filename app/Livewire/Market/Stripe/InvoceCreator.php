<?php

namespace App\Livewire\Market\Stripe;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Symfony\Component\HttpFoundation\Response;

class InvoceCreator extends Component
{
  public static function createInvoice(){
      $sessionId = session()->getId();
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $cartItems = CartFacade::session($sessionId)->getContent();

        $lineItems = [];

        $order = Order::create(['status'=> 'pending','user_id'=> Auth::check() ? Auth::user()->id : null,'shipping_details_id' => $this->shipping_details]);

        foreach ($cartItems as $item) {
            $product = Product::find($item->id);
            OrderItem::create(['cant' =>$item->quantity,'price'=>$product->price,'product_id'=>$product->id,'order_id'=>$order->id]);

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
        'order_id' => $order->id, // Incluir el ID de la orden como metadato
    ],
    'success_url' => route('stripe-order-succes'),
    'cancel_url' => route('home'),
]);



return redirect()->to($session->url);
}
}
