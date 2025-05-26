<?php

namespace App\Livewire\POItems;

use App\Models\POItems;
use Livewire\Component;
use App\Models\POrder;

class POItemsCreate extends Component
{
    public $po_id, $product_id, $quantity, $unit_price;


    public function render()
    {
        return view('livewire.p-o-items.p-o-items-create');
    }

    public function submit()
    {
        $this->validate([
            'po_id' => 'required',
            'product_id' => 'required',
            'quantity' => 'required',
            'unit_price' => 'required',
        ]);

        POItems::create([
            'po_id' => $this->po_id,
            'product_id' => $this->product_id,
            'quantity' => $this->quantity,
            'unit_price' => $this->unit_price
        ]);

        return to_route('poitems.index')->with('success', 'POItem Created');
    }

    public $porders = [];
    public $selectedPorderId = null;

    public function mount()
    {
        $this->porders = POrder::all();
    }


}
