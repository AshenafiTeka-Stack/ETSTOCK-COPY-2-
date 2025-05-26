<?php

namespace App\Livewire\Salesorders;

use App\Models\Salesorders;
use Livewire\Component;

class SalesorderCreate extends Component
{
    public $customer_id, $order_date, $status, $total_amount;

    public function render()
    {
        return view('livewire.salesorders.salesorder-create');
    }

    public function submit()
    {
        $this->validate([
            'customer_id' => 'required',
            'order_date' => 'required',
            'status' => 'required',
            'total_amount' => 'required',
        ]);

        Salesorders::create([
            'customer_id' => $this->customer_id,
            'order_date' => $this->order_date,
            'status' => $this->status,
            'total_amount' => $this->total_amount
        ]);

        return to_route('salesorders.index')->with('success', 'Sales Order Created');
    }
}
