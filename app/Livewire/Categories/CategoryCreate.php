<?php

namespace App\Livewire\Categories;

use App\Models\Productcategory;
use Livewire\Component;

class CategoryCreate extends Component
{
    public $name, $description;
    public function render()
    {
        return view('livewire.categories.category-create');
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Productcategory::create([
            'name' => $this->name,
            'description' => $this->description
        ]);

        return to_route('categories.index')->with('success', 'Product Category Created');
    }
}
