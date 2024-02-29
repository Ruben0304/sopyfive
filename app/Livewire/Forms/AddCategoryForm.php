<?php

namespace App\Livewire\Forms;

use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Rule;
use Livewire\Form;

class AddCategoryForm extends Form
{
    #[Rule(['required'])]
    public $name = '';

    #[Rule(['nullable'])]
    public $description = '';

    public function save()
    {
        Category::create($this->only(['name', 'description']));
        $this->reset();
    }
}
