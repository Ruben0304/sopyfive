<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = "payments";

    protected $fillable = ['method', 'from', 'type'];

    public function order()
    {
        return $this->hasOne(Order::class);
    }
}