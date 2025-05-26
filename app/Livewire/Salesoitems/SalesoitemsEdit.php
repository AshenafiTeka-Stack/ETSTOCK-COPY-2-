<?php

namespace App\Livewire\Salesoitems;

use App\Models\Salesoitems;
use Livewire\Component;

class SalesoitemsEdit extends Component
{

    public $salesoitem, $so_id, $product_id, $quantity, $unit_price;

    public function mount($id)
    {
        $this->salesoitem = Salesoitems::find($id);
        $this->so_id = $this->salesoitem->so_id;
        $this->product_id = $this->salesoitem->product_id;
        $this->quantity = $this->salesoitem->quantity;
        $this->unit_price = $this->salesoitem->unit_price;
    }

    public function render()
    {
        return view('livewire.salesoitems.salesoitems-edit');
    }

    public function submit()
    {
        $this->validate([
            'so_id' => 'required',
            'product_id' => 'required',
            'quantity' => 'required',
            'unit_price' => 'required'

        ]);

        $this->salesoitem->so_id = $this->so_id;
        $this->salesoitem->product_id = $this->product_id;
        $this->salesoitem->quantity = $this->quantity;
        $this->salesoitem->unit_price = $this->unit_price;

        $this->salesoitem->save();

        return to_route("salesoitems.index")->with("success", "Sales Order Item Updated");
    }

}
