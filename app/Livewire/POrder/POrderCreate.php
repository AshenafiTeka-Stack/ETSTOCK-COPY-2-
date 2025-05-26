<?php

namespace App\Livewire\POrder;

use App\Models\POrder;
use Livewire\Component;

class POrderCreate extends Component
{
    public $supplier_id, $order_date, $status, $total_amount;

    public function render()
    {
        return view('livewire.p-order.p-order-create');
    }

    public function submit()
    {
        $this->validate([
            'supplier_id' => 'required',
            'order_date' => 'required',
            'status' => 'required',
            'total_amount' => 'required',
        ]);

        POrder::create([
            'supplier_id' => $this->supplier_id,
            'order_date' => $this->order_date,
            'status' => $this->status,
            'total_amount' => $this->total_amount
        ]);

        return to_route('porders.index')->with('success', 'Purchase Order Created');
    }
}
