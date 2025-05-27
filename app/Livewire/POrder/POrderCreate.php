<?php

namespace App\Livewire\POrder;

use App\Models\POrder;
use App\Models\Supplier;
use Livewire\Component;

class POrderCreate extends Component
{
    public $supplier_id, $order_date, $status, $total_amount;


    public $suppliers = [];
    public $selectedsupplierName = null;

    public function mount()
    {
        $this->suppliers = Supplier::all();
    }

    public function render()
    {
        return view('livewire.p-order.p-order-create');
    }

    public function submit()
    {
        $this->validate([
            'selectedsupplierName' => 'required|exists:suppliers,name',
            'order_date' => 'required',
            'status' => 'required',
            'total_amount' => 'required',
        ]);

        POrder::create([
            'supplier_id' => $this->selectedsupplierName,
            'order_date' => $this->order_date,
            'status' => $this->status,
            'total_amount' => $this->total_amount
        ]);

        return to_route('porders.index')->with('success', 'Purchase Order Created');
    }
}
