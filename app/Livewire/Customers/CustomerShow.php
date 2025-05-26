<?php

namespace App\Livewire\Customers;

use App\Models\Customer;
use Livewire\Component;

class CustomerShow extends Component
{
    public $customer;

    public function mount($id)
    {
        $this->customer = Customer::find($id);
    }
    public function render()
    {
        return view('livewire.customers.customershow');
    }
}
