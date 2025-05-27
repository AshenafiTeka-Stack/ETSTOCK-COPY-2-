<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Create Sales Order') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Form for create new sales order ') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

<div>

    <a href="{{ route('salesorders.index') }}"
    class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-700 rounded-lg">Back to Sales Orders</a>


<div class="mb-5">
    <form wire:submit="submit" class="mt-5 space-y-5 w-150" >
        {{-- <flux:input wire:model="customer_id" label="Customer ID" placeholder="Customer ID" /> --}}
        

         <flux:label>Customer Name</flux:label>
        <select wire:model="selectedcustomerName" id="customers" class="border rounded bg-gray-600 w-full p-2">
        <option value="" class="bg-white dark:bg-gray-300 text-gray-400 dark:text-gray-400">Select Customer Name</option>
        @foreach($customers as $customer)
            <option value="{{ $customer->name }}" class="bg-white dark:bg-gray-600 text-gray-800 dark:text-gray-200 hover:bg-gray-900 dark:hover:bg-gray-700">
               [{{ $customer->id }}] {{ $customer->name  }}
            </option>
        @endforeach
    </select>

        
        <flux:input type="date" wire:model="order_date" label="Order Date" placeholder="Order Date" />
        <flux:input wire:model="status" label="Status" placeholder="Status" />
        <flux:input wire:model="total_amount" label="Total Amount" placeholder="Total Amount" />
    
        <flux:button type="submit" variant="primary">Create</flux:button>
    </form>
    
</div>


</div>

</div>
