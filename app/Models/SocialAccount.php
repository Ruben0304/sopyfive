<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
    use HasFactory;


    protected $fillable = [
        'provider',
        'provider_id',
        'token',
        'user_id',
        'refresh_token',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
