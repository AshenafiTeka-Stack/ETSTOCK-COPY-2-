<?php

namespace App\Livewire\Product;

use App\Models\Category;
use App\Models\Product;
use App\Models\Productcategory;
use Livewire\Component;

class ProductCreate extends Component
{
    public $product_name, $product_sku, $description, $unit, $cost_price,
    $selling_price, $exp_date, $reorder_level, $barcode_QR, $reg_date;

    public $productcategories = [];
    public $selectedcategoryName = null;

    public function mount()
    {
        $this->productcategories = Productcategory::all();
    }

    public function render()
    {
        return view('livewire.products.product-create');
    }

    public function submit()
    {
        $this->validate([
            'product_name' => 'required|string|max:255',
            'product_sku' => 'required|string|max:255',
            'selectedcategoryName' => 'required|exists:productcategories,name',
            'description' => 'nullable|string',
            'unit' => 'nullable|string',
            'cost_price' => 'nullable|numeric|min:0',
            'selling_price' => 'nullable|numeric|min:0',
            'exp_date' => 'nullable|date',
            'reorder_level' => 'nullable|numeric|min:0',
            'barcode_QR' => 'nullable|string',
            'reg_date' => 'nullable|date',
        ]);

        Product::create([
            'product_name' => $this->product_name,
            'product_sku' => $this->product_sku,
            'category_id' => $this->selectedcategoryName, // Use the selected value
            'description' => $this->description,
            'unit' => $this->unit,
            'cost_price' => $this->cost_price,
            'selling_price' => $this->selling_price,
            'exp_date' => $this->exp_date,
            'reorder_level' => $this->reorder_level,
            'barcode_QR' => $this->barcode_QR,
            'reg_date' => $this->reg_date
        ]);

        return to_route("products.index")->with("success", "Product Created");
    }
}