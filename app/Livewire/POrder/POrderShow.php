<?php

namespace App\Livewire\POrder;

use App\Models\POrder;
use Livewire\Component;

class POrderShow extends Component
{
    public $porder;

    public function mount($id)
    {
        $this->porder = POrder::find($id);
    }
    public function render()
    {
        return view('livewire.p-order.p-order-show');
    }
}
