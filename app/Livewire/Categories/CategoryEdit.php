<?php

namespace App\Livewire\Categories;

use App\Models\Product;
use App\Models\Productcategory;
use Livewire\Component;

class CategoryEdit extends Component
{
    public $category, $name, $description;

    public function mount($id)
    {
        $this->category = Productcategory::find($id);
        $this->name = $this->category->name;
        $this->description = $this->category->description;
    }
    public function render()
    {
        return view('livewire.categories.category-edit');
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $this->category->name = $this->name;
        $this->category->description = $this->description;


        $this->category->save();

        // $this->category->syncRoles($this->roles);

        return to_route("categories.index")->with("success", "Product Category Updated");
    }
}
