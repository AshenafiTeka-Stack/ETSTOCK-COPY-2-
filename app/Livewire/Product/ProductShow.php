<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class ProductShow extends Component
{

    public $product;

    public function mount($product_id)
    {
        $this->product = Product::find($product_id);
    }
    public function render()
    {
        return view('livewire.products.product-show');
    }
}
