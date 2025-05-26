<?php

namespace App\Livewire\POrder;

use App\Models\POrder;
use Livewire\Component;

class POrderIndex extends Component
{
    public function render()
    {
        $porders = POrder::get();

        return view('livewire.p-order.p-order-index', compact('porders'));
    }

    public function delete($id)
    {
        $porders = POrder::find($id);
        $porders->delete();


        session()->flash("success", "Purchase Order Deleted");

    }
}
