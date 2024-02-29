<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\AddCategoryForm;
use Livewire\Component;

class AddCategory extends Component
{
    public  AddCategoryForm $form;
    public function create()
    {

        $this->form->save();
        return redirect()->route('add-article');
    }
    public function render()
    {
        return view('livewire.admin.add-category')->layout('layouts.admin');
    }
}
