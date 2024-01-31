<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'edad', 'como_descubrio_sopyfive', 'peticiones', 'acceso_a_especialistas', 'gustaria_tienda', 'quisiera_ser_parte', 'email_phone', 'user_id'];

    public function comunidades()
    {
        return $this->belongsToMany(Comunity::class, 'comunities_encuesta');
    }
}
