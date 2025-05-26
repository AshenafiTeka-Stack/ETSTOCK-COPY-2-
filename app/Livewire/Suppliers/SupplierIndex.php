<?php

namespace App\Livewire\Suppliers;

use App\Models\Supplier;
use Livewire\Component;

class SupplierIndex extends Component
{
    public function render()
    {
        $suppliers = Supplier::get();

        return view('livewire.suppliers.supplier-index', compact('suppliers'));
    }

    public function delete($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();


        session()->flash("success", "Supplier Deleted");

    }

}
