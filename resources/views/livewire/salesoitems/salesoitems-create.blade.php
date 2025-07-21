<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Create Sales Order Items') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Form for create new sales order Items ') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

<div>

    <a href="{{ route('salesoitems.index') }}"
    class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-700 rounded-lg">Back to Sales Order Items</a>


<div class="mb-5">
    <form wire:submit="submit" class="mt-5 space-y-5 w-150" >
        {{-- <flux:input wire:model="so_id" label="Sales Order ID" placeholder="Sales Order ID" />
        <flux:input wire:model="product_id" label="Product ID" placeholder="Product ID" /> --}}
       

        <flux:label>Sales Order ID</flux:label>
    <select wire:model="selectedsalesorderId" id="salesorder" class="border rounded bg-gray-600 w-full p-2">
        <option value="" class="bg-white dark:bg-gray-300 text-gray-400 dark:text-gray-400">Select Sales Order ID</option>
        @foreach($salesorders as $salesorder)
            <option value="{{ $salesorder->id }}" class="bg-white dark:bg-gray-600 text-gray-800 dark:text-gray-200 hover:bg-gray-900 dark:hover:bg-gray-700">
                [{{ $salesorder->id }}] - {{ $salesorder->customer_id }}
            </option>
        @endforeach
    </select>


            <flux:label>Product Name</flux:label>
       <select wire:model="selectedproductName" id="product" class="border rounded bg-gray-600 w-full p-2">
        <option value="" class="bg-white dark:bg-gray-300 text-gray-400 dark:text-gray-400">Select Product Name</option>
        @foreach($products as $product)
            <option value="{{ $product->product_name }}" class="bg-white dark:bg-gray-600 text-gray-800 dark:text-gray-200 hover:bg-gray-900 dark:hover:bg-gray-700">
                {{ $product->product_name }}
            </option>
        @endforeach     
    </select>

        <flux:input wire:model="quantity" label="Quantity" placeholder="Quantity" />
        <flux:input wire:model="unit_price" label="Unit Price" placeholder="Unit Price" />
    
        <flux:button type="submit" variant="primary">Create</flux:button>
    </form>
   
</div>


</div>

</div>
