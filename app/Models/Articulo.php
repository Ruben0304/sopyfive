<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;

    protected  $table = "articulos";

    protected $fillable = ['title', 'content', 'comunity_id'];
    protected $casts = [
        'created_at' => 'date', // o 'datetime'
    ];

    public function comunity()
    {
        return $this->belongsTo(Comunity::class);
    }
}
