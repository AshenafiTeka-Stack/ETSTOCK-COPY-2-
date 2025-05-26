<?php

namespace App\Livewire\Suppliers;

use App\Models\Supplier;
use Livewire\Component;

class SupplierCreate extends Component
{
    public $name, $contact_person, $email, $phone, $address;
    public function render()
    {
        return view('livewire.suppliers.supplier-create');
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'contact_person' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        Supplier::create([
            'name' => $this->name,
            'contact_person' => $this->contact_person,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address
        ]);

        return to_route('suppliers.index')->with('success', 'Supplier Created');
    }
}
