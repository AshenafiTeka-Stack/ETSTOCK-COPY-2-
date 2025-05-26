<?php

namespace App\Livewire\Customers;

use App\Models\Customer;
use Livewire\Component;

class CustomerIndex extends Component
{
    public function render()
    {

        $customers = Customer::get();

        return view('livewire.customers.customer-index', compact('customers'));
    }

    public function delete($id)
    {
        $customer = Customer::find($id);
        $customer->delete();


        session()->flash("success", "Customer Deleted");

    }

}
