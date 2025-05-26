<?php

namespace App\Livewire\Customers;

use App\Models\Customer;
use Livewire\Component;

class CustomerEdit extends Component
{

    public $customer, $name, $email, $phone, $address;

    public function mount($id)
    {
        $this->customer = Customer::find($id);
        $this->name = $this->customer->name;
        $this->email = $this->customer->email;
        $this->phone = $this->customer->phone;
        $this->address = $this->customer->address;
    }
    public function render()
    {
        return view('livewire.customers.customer-edit');
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required'

        ]);

        $this->customer->name = $this->name;
        $this->customer->email = $this->email;
        $this->customer->phone = $this->phone;
        $this->customer->address = $this->address;

        $this->customer->save();

        return to_route("customers.index")->with("success", "Customer Updated");
    }
}
