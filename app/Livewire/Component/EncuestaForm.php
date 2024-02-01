<?php

namespace App\Livewire\Component;

use App\Livewire\Forms\EncuestaFormulario;
use App\Models\Comunity;
use App\Models\Encuesta;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Validate;

// Componente Livewire
class EncuestaForm extends Component
{
    public EncuestaFormulario $form;
    public $comunidades_vista;


    public function mount()
    {
        $this->comunidades_vista = Comunity::all();
    }

    public function save()
    {
        // Validar los datos del formulario
        $this->validate();
        dd($this->form->all());
        // Crear una nueva encuesta con los datos del formulario
        $encuesta = Encuesta::create($this->form->all());

        // Sincronizar las comunidades seleccionadas con la encuesta
        $encuesta->comunidades()->sync($this->comunidades);

        // Redirigir a la página de inicio
        return redirect(route('home'));
    }

    // El método para renderizar la vista
    public function render()
    {
        return view('livewire.component.encuesta-form');
    }
}
