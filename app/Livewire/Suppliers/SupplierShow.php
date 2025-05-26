<?php

namespace App\Livewire\Suppliers;

use App\Models\Supplier;
use Livewire\Component;

class SupplierShow extends Component
{

    public $supplier;

    public function mount($id)
    {
        $this->supplier = Supplier::find($id);
    }
    public function render()
    {
        return view('livewire.suppliers.supplier-show');
    }
}
