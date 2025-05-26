<?php

namespace App\Livewire\Warehouse;

use App\Models\Warehouse;
use Livewire\Component;

class WarehouseEdit extends Component
{
    public $warehouse, $name, $location, $contact_person;

    public function mount($id)
    {
        $this->warehouse = Warehouse::find($id);
        $this->name = $this->warehouse->name;
        $this->location = $this->warehouse->location;
        $this->contact_person = $this->warehouse->contact_person;

    }

    public function render()
    {
        return view('livewire.warehouse.warehouse-edit');
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'location' => 'required',
            'contact_person' => 'required'

        ]);

        $this->warehouse->name = $this->name;
        $this->warehouse->location = $this->location;
        $this->warehouse->contact_person = $this->contact_person;

        $this->warehouse->save();

        // $this->category->syncRoles($this->roles);

        return to_route("warehouses.index")->with("success", "Warehouse Updated");
    }
}
