<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductCounter extends Component
{

    public $totalProducts;

    public function mount()
    {
        $this->totalProducts = Product::count();
    }

    public function render()
    {
        return view('livewire.product-counter');
    }
}
