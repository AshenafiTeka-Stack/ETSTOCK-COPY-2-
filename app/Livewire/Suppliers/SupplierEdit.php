<?php

namespace App\Livewire\Suppliers;

use App\Models\Supplier;
use Livewire\Component;

class SupplierEdit extends Component
{

    public $supplier, $name, $contact_person, $email, $phone, $address;

    public function mount($id)
    {
        $this->supplier = Supplier::find($id);
        $this->name = $this->supplier->name;
        $this->contact_person = $this->supplier->contact_person;
        $this->email = $this->supplier->email;
        $this->phone = $this->supplier->phone;
        $this->address = $this->supplier->address;
    }

    public function render()
    {
        return view('livewire.suppliers.supplier-edit');
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'contact_person' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required'

        ]);

        $this->supplier->name = $this->name;
        $this->supplier->contact_person = $this->contact_person;
        $this->supplier->email = $this->email;
        $this->supplier->phone = $this->phone;
        $this->supplier->address = $this->address;

        $this->supplier->save();

        return to_route("suppliers.index")->with("success", "Supplier Updated");
    }

}
