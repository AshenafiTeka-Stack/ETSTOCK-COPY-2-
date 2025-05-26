<?php

namespace App\Livewire\Warehouse;

use App\Models\Warehouse;
use Livewire\Component;

class WarehouseCreate extends Component
{
    public $name, $location, $contact_person;
    public function render()
    {
        return view('livewire.warehouse.warehouse-create');
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'location' => 'required',
            'contact_person' => 'required',
        ]);

        Warehouse::create([
            'name' => $this->name,
            'location' => $this->location,
            'contact_person' => $this->contact_person
        ]);

        return to_route('warehouses.index')->with('success', 'Warehouse Created');
    }
}
