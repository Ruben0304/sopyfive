<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $table = 'slider_landing';

    public function comunity()
    {
        return $this->belongsTo(Comunity::class);
    }
}
