<?php

namespace App\Livewire\POrder;

use App\Models\POrder;
use Livewire\Component;

class POrderEdit extends Component
{

    public $porder, $supplier_id, $order_date, $status, $total_amount;
    public function mount($id)
    {
        $this->porder = POrder::find($id);
        $this->supplier_id = $this->porder->supplier_id;
        $this->order_date = $this->porder->order_date;
        $this->status = $this->porder->status;
        $this->total_amount = $this->porder->total_amount;
    }

    public function render()
    {
        return view('livewire.p-order.p-order-edit');
    }

    public function submit()
    {
        $this->validate([
            'supplier_id' => 'required',
            'order_date' => 'required',
            'status' => 'required',
            'total_amount' => 'required'

        ]);

        $this->porder->supplier_id = $this->supplier_id;
        $this->porder->order_date = $this->order_date;
        $this->porder->status = $this->status;
        $this->porder->total_amount = $this->total_amount;

        $this->porder->save();

        return to_route("porders.index")->with("success", "Purchase Order Updated");
    }

}
