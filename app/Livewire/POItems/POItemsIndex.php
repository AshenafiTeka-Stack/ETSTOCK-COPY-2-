<?php

namespace App\Livewire\POItems;

use App\Models\POItems;
use Livewire\Component;

class POItemsIndex extends Component
{
    public function render()
    {
        $poitems = POItems::get();

        return view('livewire.p-o-items.p-o-items-index', compact('poitems'));
    }

    public function delete($id)
    {
        $poitems = POItems::find($id);
        $poitems->delete();


        session()->flash("success", "Purchase Order Item Deleted");

    }
}
