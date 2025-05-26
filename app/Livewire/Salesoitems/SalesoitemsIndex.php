<?php

namespace App\Livewire\Salesoitems;

use App\Models\Salesoitems;
use Livewire\Component;

class SalesoitemsIndex extends Component
{
    public function render()
    {
        $salesoitems = Salesoitems::get();

        return view('livewire.salesoitems.salesoitems-index', compact('salesoitems'));
    }

    public function delete($id)
    {
        $salesoitem = Salesoitems::find($id);
        $salesoitem->delete();


        session()->flash("success", "Sales Order Items Deleted");

    }
}
