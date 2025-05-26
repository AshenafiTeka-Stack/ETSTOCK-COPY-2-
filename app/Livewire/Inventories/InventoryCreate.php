<?php

namespace App\Livewire\Inventories;

use App\Models\Inventories;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\Warehouse;
use Livewire\Component;

class InventoryCreate extends Component
{
    public $quantity, $last_updated;

    // For product selection
    public $products = [];
    public $selectedProductId = null;

    // For warehouse selection
    public $warehouses = [];
    public $selectedWarehouseId = null;

    public function mount()
    {
        $this->products = Product::all();
        $this->warehouses = Warehouse::all();
    }

    public function submit()
    {
        $this->validate([
            'selectedProductId' => 'required|exists:products,product_name',
            'selectedWarehouseId' => 'required|exists:warehouses,name',
            'quantity' => 'required|numeric|min:0',
            'last_updated' => 'required|date',
        ]);

        Inventories::create([
            'product_id' => $this->selectedProductId,
            'warehouse_id' => $this->selectedWarehouseId,
            'quantity' => $this->quantity,
            'last_updated' => $this->last_updated,
        ]);

        return to_route('inventories.index')->with('success', 'Inventory Created');
    }

    public function render()
    {
        return view('livewire.inventories.inventory-create');
    }
}