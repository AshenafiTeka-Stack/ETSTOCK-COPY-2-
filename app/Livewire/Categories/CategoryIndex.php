<?php

namespace App\Livewire\Categories;

use App\Models\Product;
use App\Models\Productcategory;
use Livewire\Component;

class CategoryIndex extends Component
{
    public function render()
    {
        $productcategories = Productcategory::get();

        return view('livewire.categories.category-index', compact('productcategories'));
    }

    public function delete($id)
    {
        $category = Productcategory::find($id);
        $category->delete();


        session()->flash("success", "Product Category Deleted");

    }
}
