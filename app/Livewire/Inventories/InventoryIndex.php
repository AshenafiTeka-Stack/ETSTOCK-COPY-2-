<?php

namespace App\Livewire\Inventories;

use App\Models\Inventories;
use Livewire\Component;

class InventoryIndex extends Component
{
    public function render()
    {
        $inventories = Inventories::get();

        return view('livewire.inventories.inventory-index', compact('inventories'));
    }

    public function delete($id)
    {
        $inventory = Inventories::find($id);
        $inventory->delete();


        session()->flash("success", "Inventory Deleted");

    }
}
