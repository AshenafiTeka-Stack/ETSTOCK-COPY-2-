<?php

namespace App\Livewire\Salesorders;

use App\Models\Salesorders;
use Livewire\Component;

class SalesorderIndex extends Component
{
    public function render()
    {
        $salesorders = Salesorders::get();

        return view('livewire.salesorders.salesorder-index', compact('salesorders'));
    }

    public function delete($id)
    {
        $salesorder = Salesorders::find($id);
        $salesorder->delete();


        session()->flash("success", "Sales Order Deleted");

    }

}
