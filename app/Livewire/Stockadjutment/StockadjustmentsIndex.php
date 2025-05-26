<?php

namespace App\Livewire\Stockadjutment;

use App\Models\Salesoitems;
use App\Models\Stockadjust;
use Livewire\Component;

class StockadjustmentsIndex extends Component
{
    public function render()
    {
        $stockadjustments = Stockadjust::get();
        return view('livewire.stockadjutment.stockadjustments-index', compact('stockadjustments'));
    }

    public function delete($id)
    {
        $stockadjustments = Salesoitems::find($id);
        $stockadjustments->delete();


        session()->flash("success", "Stock Adjustment Deleted");

    }
}
