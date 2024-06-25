<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(User $user)
    {
        return $user->cart();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'quantity' => ['required', 'integer'],
            'price' => ['required', 'numeric'],
        ]);

        return Cart::create($data);
    }

    public function show(Cart $cart)
    {
        return $cart;
    }

    public function update(Request $request, Cart $cart)
    {
        $data = $request->validate([
            'quantity' => ['required', 'integer'],
            'price' => ['required', 'numeric'],
        ]);

        $cart->update($data);

        return $cart;
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();

        return response()->json();
    }
}
