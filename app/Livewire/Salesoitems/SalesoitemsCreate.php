<?php

namespace App\Livewire\Salesoitems;

use App\Models\Product;
use App\Models\Salesoitems;
use App\Models\Salesorders;
use Livewire\Component;

class SalesoitemsCreate extends Component
{
    public $so_id, $product_id, $quantity, $unit_price;


    // For salesorder selection
    public $salesorders = [];
    public $selectedsalesorderId = null;

    // For product selection
    public $products = [];
    public $selectedproductName = null;

    public function mount()
    {
        $this->salesorders = Salesorders::all();
        $this->products = Product::all();
    }


    public function render()
    {
        return view('livewire.salesoitems.salesoitems-create');
    }

    public function submit()
    {
        $this->validate([
            'selectedsalesorderId' => 'required|exists:salesorders,id',
            'selectedproductName' => 'required|exists:products,product_name',
            'quantity' => 'required',
            'unit_price' => 'required',
        ]);

        Salesoitems::create([
            'so_id' => $this->selectedsalesorderId,
            'product_id' => $this->selectedproductName,
            'quantity' => $this->quantity,
            'unit_price' => $this->unit_price
        ]);

        return to_route('salesoitems.index')->with('success', 'Sales Order Items Created');
    }


}
