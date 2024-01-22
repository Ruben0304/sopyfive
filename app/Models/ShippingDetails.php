<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingDetails extends Model
{

    protected $fillable = ['user_id', 'address', 'city'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
