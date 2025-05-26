<?php

namespace App\Livewire\Customers;

use App\Models\Customer;
use Livewire\Component;

class CustomerCreate extends Component
{
    public $name, $email, $phone, $address;
    public function render()
    {
        return view('livewire.customers.customer-create');
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        Customer::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address
        ]);

        return to_route('customers.index')->with('success', 'Customer Created');
    }
}
