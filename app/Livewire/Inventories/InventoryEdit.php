<?php

namespace App\Livewire\Inventories;

use App\Models\Inventories;
use App\Models\Inventory;
use Livewire\Component;

class InventoryEdit extends Component
{

    public $inventory, $product_id, $warehouse_id, $quantity, $last_updated;
    public function mount($id)
    {
        $this->inventory = Inventories::find($id);
        $this->product_id = $this->inventory->product_id;
        $this->warehouse_id = $this->inventory->warehouse_id;
        $this->quantity = $this->inventory->quantity;
        $this->last_updated = $this->inventory->last_updated;
    }


    public function render()
    {
        return view('livewire.inventories.inventory-edit');
    }

    public function submit()
    {
        $this->validate([
            'product_id' => 'required',
            'warehouse_id' => 'required',
            'quantity' => 'required',
            'last_updated' => 'required'

        ]);

        $this->inventory->product_id = $this->product_id;
        $this->inventory->warehouse_id = $this->warehouse_id;
        $this->inventory->quantity = $this->quantity;
        $this->inventory->last_updated = $this->last_updated;

        $this->inventory->save();

        return to_route("inventories.index")->with("success", "Inventory Updated");
    }
}
