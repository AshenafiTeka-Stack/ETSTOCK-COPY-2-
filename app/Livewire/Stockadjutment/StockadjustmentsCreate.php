<?php

namespace App\Livewire\Stockadjutment;

use App\Models\Stockadjust;
use Livewire\Component;

class StockadjustmentsCreate extends Component
{

    public $product_id, $warehouse_id, $adjustment_type, $quantity, $reason, $adjusted_by;

    public function render()
    {
        return view('livewire.stockadjutment.stockadjustments-create');
    }

    public function submit()
    {
        $this->validate([
            'product_id' => 'required',
            'warehouse_id' => 'required',
            'adjustment_type' => 'required',
            'quantity' => 'required',
            'reason' => 'required',
            'adjusted_by' => 'required',

        ]);

        Stockadjust::create([
            'product_id' => $this->product_id,
            'warehouse_id' => $this->warehouse_id,
            'adjustment_type' => $this->adjustment_type,
            'quantity' => $this->quantity,
            'reason' => $this->reason,
            'adjusted_by' => $this->adjusted_by

        ]);

        return to_route('stockadjustments.index')->with('success', 'Stock Adjustment Created');
    }
}
