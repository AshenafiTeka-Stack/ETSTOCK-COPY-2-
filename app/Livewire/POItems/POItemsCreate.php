<?php

namespace App\Livewire\POItems;

use App\Models\POItems;
use App\Models\Product;
use Livewire\Component;
use App\Models\POrder;

class POItemsCreate extends Component
{
    public $po_id, $product_id, $quantity, $unit_price;


    // For PO selection
    public $porders = [];
    public $selectedporderId = null;

    // For warehouse selection
    public $products = [];
    public $selectedproductName = null;

    public function mount()
    {
        $this->porders = POrder::all();
        $this->products = Product::all();
    }

    public function render()
    {
        return view('livewire.p-o-items.p-o-items-create');
    }

    public function submit()
    {
        $this->validate([
            'selectedporderId' => 'required|exists:porders,id',
            'selectedproductName' => 'required|exists:products,product_name',
            'quantity' => 'required',
            'unit_price' => 'required',
        ]);

        POItems::create([
            'po_id' => $this->selectedporderId,
            'product_id' => $this->selectedproductName,
            'quantity' => $this->quantity,
            'unit_price' => $this->unit_price
        ]);

        return to_route('poitems.index')->with('success', 'POItem Created');
    }

}
