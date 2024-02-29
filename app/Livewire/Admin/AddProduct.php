<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\AddProductForm;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddProduct extends Component
{
    use WithFileUploads;
   public AddProductForm $form;
   public $categories;

   public function mount()
   {
       $this->categories = Category::all();
   }
    public function create()
    {
        $this->form->save();
        return redirect()->route('add-article');
    }
    public function render()
    {
        return view('livewire.admin.add-product')->layout('layouts.admin');
    }
}
