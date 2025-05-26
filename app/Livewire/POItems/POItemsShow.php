<?php

namespace App\Livewire\POItems;

use App\Models\POItems;
use Livewire\Component;

class POItemsShow extends Component
{
    public $poitem;

    public function mount($id)
    {
        $this->poitem = POItems::find($id);
    }
    public function render()
    {
        return view('livewire.p-o-items.p-o-items-show');
    }
}
