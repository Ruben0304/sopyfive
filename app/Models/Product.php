<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // La tabla asociada al modelo.
    protected $table = 'products';

    // Los atributos que son asignables en masa.
    protected $fillable = ['name', 'description', 'price', 'stock', 'image'];

    /**
     * Las categorías que pertenecen al producto.
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
