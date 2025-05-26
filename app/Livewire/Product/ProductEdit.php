<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class ProductEdit extends Component
{
    public $product, $product_name, $product_sku, $category_id, $description, $unit, $cost_price, $selling_price, $exp_date, $reorder_level, $barcode_QR, $reg_date;

    public function mount($product_id)
    {
        $this->product = Product::find($product_id);
        $this->product_name = $this->product->product_name;
        $this->product_sku = $this->product->product_sku;
        $this->category_id = $this->product->category_id;
        $this->description = $this->product->description;
        $this->unit = $this->product->unit;
        $this->cost_price = $this->product->cost_price;
        $this->selling_price = $this->product->selling_price;
        $this->exp_date = $this->product->exp_date;
        $this->reorder_level = $this->product->reorder_level;
        $this->barcode_QR = $this->product->barcode_QR;
        $this->reg_date = $this->product->reg_date;

    }
    public function render()
    {
        return view('livewire.products.product-edit');
    }

    public function submit()
    {

        $this->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'nullable|integer',
            'description' => 'nullable|string',
            'unit' => 'nullable|string',
            'cost_price' => 'nullable|numeric|min:0',
            'selling_price' => 'nullable|numeric|min:0',
            'exp_date' => 'nullable|date',
            'reorder_level' => 'nullable|integer|min:0',
            'barcode_QR' => 'nullable|string',
            'reg_date' => 'nullable|date'
        ]);



        $this->product->name = $this->product_name;
        $this->product->sku = $this->product_sku;
        $this->product->category_id = $this->category_id;
        $this->product->description = $this->description;
        $this->product->unit = $this->unit;
        $this->product->cost_price = $this->cost_price;
        $this->product->selling_price = $this->selling_price;
        $this->product->exp_date = $this->exp_date;
        $this->product->reorder_level = $this->reorder_level;
        $this->product->barcode_QR = $this->barcode_QR;
        $this->product->reg_date = $this->reg_date;

        $this->product->save();

        return to_route("products.index")->with("success", "Product updated");
    }
}
