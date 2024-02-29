<?php

namespace App\Livewire\Forms;

use App\Models\Articulo;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Livewire\Form;

class AddArticleForm extends Form
{
    public string $title;
    public string $content ;
    public int $comunity ;
    public $photo ;


    public function create():void
    {
        // Validar los datos del formulario
        $this->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'min:300'],
            'comunity' => ['required', 'numeric','exists:comunities,id'],
            'photo' => ['required','image', 'max:5000', 'mimes:jpg'], // Validar la imagen
        ]);

        // Obtener la ruta de la imagen y guardarla en el disco 'public'


        // Crear una instancia del modelo Articulo con los datos validados
        $article = Articulo::create([
            'title' => $this->title,
            'content' => $this->content,
            'comunity_id' => $this->comunity,

        ]);


        $this->photo->storeAs('articles/', $article->id . '.jpg', 'public');





    }
}
