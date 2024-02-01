<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "orders";

    protected $fillable = ['status', 'payment_id', 'user_id', 'shipping_details_id'];

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function shipping_details()
    {
        return $this->belongsTo(ShippingDetails::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

}
