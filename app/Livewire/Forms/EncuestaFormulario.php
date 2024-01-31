<?php

namespace App\Livewire\Forms;

use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class EncuestaFormulario extends Form
{
    // Las propiedades del formulario
    public string $nombre;
    public string $edad;
    public string $como_descubrio_sopyfive;
    public string $peticiones;
    public string $acceso_a_especialistas;
    public string $gustaria_tienda;
    public string $quisiera_ser_parte;
    public string $email_phone;
    public $comunidades = [];

   

    public function rules()
    {
        return [
            'nombre' => 'nullable|string|max:255',
            'edad' => 'required|string|max:20',
            'como_descubrio_sopyfive' => 'required|string|max:255',
            'peticiones' => 'nullable|string|max:255',
            'acceso_a_especialistas' => 'required|string|max:255',
            'gustaria_tienda' => 'required|string|max:255',
            'quisiera_ser_parte' => 'required|string|max:255',
            'email_phone' => ['required', 'string','max:255', Rule::unique('encuestas', 'email_phone')],
            'comunidades' => 'required|array|min:1',
        ];
    }

    // Los mensajes de error personalizados para cada regla
    protected $messages = [

        'nombre.string' => 'El nombre debe ser una cadena de texto.',
        'nombre.max' => 'El nombre no debe superar los 255 caracteres.',
        'edad.required' => 'La edad es obligatoria.',
        'edad.string' => 'La edad debe ser una cadena de texto.',
        'edad.min' => 'La edad debe ser mayor o igual a 18 años.',
        'edad.max' => 'La edad debe ser menor o igual a 120 años.',
        'como_descubrio_sopyfive.required' => 'Esta pregunta es obligatoria.',
        'como_descubrio_sopyfive.string' => 'La respuesta debe ser una cadena de texto.',
        'como_descubrio_sopyfive.max' => 'La respuesta no debe superar los 255 caracteres.',
        'peticiones.string' => 'La respuesta debe ser una cadena de texto.',
        'peticiones.max' => 'La respuesta no debe superar los 255 caracteres.',
        'acceso_a_especialistas.required' => 'Esta pregunta es obligatoria.',
        'acceso_a_especialistas.string' => 'La respuesta debe ser una cadena de texto.',
        'acceso_a_especialistas.max' => 'La respuesta no debe superar los 255 caracteres.',
        'gustaria_tienda.required' => 'Esta pregunta es obligatoria.',
        'gustaria_tienda.string' => 'La respuesta debe ser una cadena de texto.',
        'gustaria_tienda.max' => 'La respuesta no debe superar los 255 caracteres.',
        'quisiera_ser_parte.required' => 'Esta pregunta es obligatoria.',
        'quisiera_ser_parte.string' => 'La respuesta debe ser una cadena de texto.',
        'quisiera_ser_parte.max' => 'La respuesta no debe superar los 255 caracteres.',
        'email_phone.required' => 'El email es obligatorio.',
        'email_phone.string' => 'El email debe ser una cadena de texto.',
        'email_phone.max' => 'El email no debe superar los 255 caracteres.',
        'comunidades.required' => 'Debes seleccionar al menos una comunidad.',
        'comunidades.array' => 'Las comunidades deben ser un array.',
        'comunidades.min' => 'Debes seleccionar al menos una comunidad.',
    ];
}
