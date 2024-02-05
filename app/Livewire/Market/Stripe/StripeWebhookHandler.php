<?php

namespace App\Livewire\Market\Stripe;

use App\Models\Order;
use App\Models\Payment;
use Livewire\Component;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StripeWebhookHandler extends Component
{
    public function mount(Request $request)
    {
        // Verificar la firma del evento
        $payload = $request->getContent();
        $sig_header = $request->header('Stripe-Signature');
        $event = null;

        try {
            $event = \Stripe\Webhook::constructEvent(
                $payload, $sig_header, env('STRIPE_WEBHOOK_SECRET')
            );
        } catch (\UnexpectedValueException $e) {
            // La firma no es válida
            return response('Firma no válida', Response::HTTP_BAD_REQUEST);
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            // Problema con la firma
            return response('Problema con la firma', Response::HTTP_BAD_REQUEST);
        }

        // Procesar el evento
        if ($event->type == 'payment_intent.succeeded') {
            $sessionId = session()->getId();
            $orderId = Cashier::stripe()->checkout->sessions->retrieve($sessionId)['metadata']['order_id'] ?? null;
            $order = Order::findOrFail($orderId);
            $order->payment()->update(['status' => 'pagado']);

            dd($orderId);
        }

        return response('Evento manejado', Response::HTTP_OK);
    }

    public function render()
    {
        return view('livewire.market.stripe.stripe-webhook-handler');
    }
}
