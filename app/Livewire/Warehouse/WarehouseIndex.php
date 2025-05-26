<?php

namespace App\Livewire\Warehouse;

use App\Models\Warehouse;
use Livewire\Component;

class WarehouseIndex extends Component
{
    public function render()
    {
        $warehouses = Warehouse::get();

        return view('livewire.warehouse.warehouse-index', compact('warehouses'));
    }
    public function delete($id)
    {
        $warehouse = Warehouse::find($id);
        $warehouse->delete();


        session()->flash("success", "Warehouse Deleted");

    }
}
