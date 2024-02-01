<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunity extends Model
{
    use HasFactory;
    protected $table = 'comunities';
    protected $fillable = ['title'];

    public function encuestas()
    {
        return $this->belongsToMany(Encuesta::class, 'comunities_encuesta');
    }
}