<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\AddArticleForm;
use App\Models\Comunity;
use Livewire\Component;
use Livewire\Form;
use Livewire\WithFileUploads;

class AddArticle extends Component
{
    use WithFileUploads;

    public $comunities;
    public AddArticleForm $form;


    public function create()
    {


        $this->form->create();
        return redirect()->route('add-article');
    }
    public function mount()
    {
        $this->comunities=Comunity::all();
    }
    public function render()
    {
        return view('livewire.admin.add-article')->layout('layouts.admin');
    }
}
