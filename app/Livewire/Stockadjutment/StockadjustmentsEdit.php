<?php

namespace App\Livewire\Stockadjutment;

use App\Models\Stockadjust;
use Livewire\Component;

class StockadjustmentsEdit extends Component
{
    public $stockadjustment, $product_id, $warehouse_id, $adjustment_type, $quantity, $reason, $adjusted_by;

    public function mount($id)
    {
        $this->stockadjustment = Stockadjust::find($id);
        $this->product_id = $this->stockadjustment->product_id;
        $this->warehouse_id = $this->stockadjustment->warehouse_id;
        $this->adjustment_type = $this->stockadjustment->adjustment_type;
        $this->quantity = $this->stockadjustment->quantity;
        $this->reason = $this->stockadjustment->reason;
        $this->adjusted_by = $this->stockadjustment->adjusted_by;

    }

    public function render()
    {
        return view('livewire.stockadjutment.stockadjustments-edit');
    }

    public function submit()
    {
        $this->validate([
            'product_id' => 'required',
            'warehouse_id' => 'required',
            'adjustment_type' => 'required',
            'quantity' => 'required',
            'reason' => 'required',
            'adjusted_by' => 'required'


        ]);

        $this->stockadjustment->product_id = $this->product_id;
        $this->stockadjustment->warehouse_id = $this->warehouse_id;
        $this->stockadjustment->adjustment_type = $this->adjustment_type;
        $this->stockadjustment->quantity = $this->quantity;
        $this->stockadjustment->reason = $this->reason;
        $this->stockadjustment->adjusted_by = $this->adjusted_by;


        $this->stockadjustment->save();

        return to_route("stockadjustments.index")->with("success", "Stock Adjustment Updated");
    }
}
