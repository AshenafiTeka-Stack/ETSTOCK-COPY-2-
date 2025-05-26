<?php

namespace App\Livewire\POItems;

use App\Models\POItems;
use Livewire\Component;

class POItemsEdit extends Component
{
    public $poitem, $po_id, $product_id, $quantity, $unit_price;
    public function mount($id)
    {
        $this->poitem = POItems::find($id);
        $this->po_id = $this->poitem->po_id;
        $this->product_id = $this->poitem->product_id;
        $this->quantity = $this->poitem->quantity;
        $this->unit_price = $this->poitem->unit_price;
    }
    public function render()
    {
        return view('livewire.p-o-items.p-o-items-edit');
    }

    public function submit()
    {
        $this->validate([
            'po_id' => 'required',
            'product_id' => 'required',
            'quantity' => 'required',
            'unit_price' => 'required'

        ]);

        $this->poitem->po_id = $this->po_id;
        $this->poitem->product_id = $this->product_id;
        $this->poitem->quantity = $this->quantity;
        $this->poitem->unit_price = $this->unit_price;

        $this->poitem->save();

        return to_route("poitems.index")->with("success", "POItem Updated");
    }
}
