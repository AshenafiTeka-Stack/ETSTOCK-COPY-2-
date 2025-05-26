<?php

namespace App\Livewire\Salesorders;

use App\Models\Salesorders;
use Livewire\Component;

class SalesorderEdit extends Component
{

    public $salesorder, $customer_id, $order_date, $status, $total_amount;
    public function mount($id)
    {
        $this->salesorder = Salesorders::find($id);
        $this->customer_id = $this->salesorder->customer_id;
        $this->order_date = $this->salesorder->order_date;
        $this->status = $this->salesorder->status;
        $this->total_amount = $this->salesorder->total_amount;
    }

    public function render()
    {
        return view('livewire.salesorders.salesorder-edit');
    }

    public function submit()
    {
        $this->validate([
            'customer_id' => 'required',
            'order_date' => 'required',
            'status' => 'required',
            'total_amount' => 'required'

        ]);

        $this->salesorder->customer_id = $this->customer_id;
        $this->salesorder->order_date = $this->order_date;
        $this->salesorder->status = $this->status;
        $this->salesorder->total_amount = $this->total_amount;

        $this->salesorder->save();

        return to_route("salesorders.index")->with("success", "Sales Order Updated");
    }
}
