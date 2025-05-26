<?php

namespace App\Livewire\Salesoitems;

use App\Models\Salesoitems;
use App\Models\Salesorders;
use Livewire\Component;

class SalesoitemsCreate extends Component
{
    public $so_id, $product_id, $quantity, $unit_price;

    public function render()
    {
        return view('livewire.salesoitems.salesoitems-create');
    }

    public function submit()
    {
        $this->validate([
            'so_id' => 'required',
            'product_id' => 'required',
            'quantity' => 'required',
            'unit_price' => 'required',
        ]);

        Salesoitems::create([
            'so_id' => $this->so_id,
            'product_id' => $this->product_id,
            'quantity' => $this->quantity,
            'unit_price' => $this->unit_price
        ]);

        return to_route('salesoitems.index')->with('success', 'Sales Order Items Created');
    }


}
