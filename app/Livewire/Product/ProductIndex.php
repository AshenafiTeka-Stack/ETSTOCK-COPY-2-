<?php

namespace App\Livewire\Product;

use App\Models\product;
use Livewire\Component;

class ProductIndex extends Component
{
    public function render()
    {
        $products = Product::paginate(10);
        return view('livewire.products.product-index', compact("products"));
    }

    public function delete($product_id)
    {
        $product = Product::find($product_id);
        $product->delete();


        session()->flash("success", "Product Deleted");

    }

    // In your Controller
    public function index()
    {
        $products = Product::paginate(10); // 10 items per page
        return view('livewire.products.product-index', compact('products'));
    }

}
