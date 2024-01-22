<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

     // La tabla asociada al modelo.
     protected $table = 'categories';

     // Los atributos que son asignables en masa.
     protected $fillable = ['name', 'description'];
 
     /**
      * Los productos que pertenecen a la categoría.
      */
     public function products()
     {
         return $this->belongsToMany(Product::class);
     }
}
