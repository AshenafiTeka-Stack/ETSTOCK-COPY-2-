<?php

namespace App\Livewire\Categories;

use App\Models\Productcategory;
use Livewire\Component;

class CategoryShow extends Component
{

    public $category;
    public function mount($id)
    {
        $this->category = Productcategory::find($id);
    }
    public function render()
    {
        return view('livewire.categories.category-show');
    }
}
