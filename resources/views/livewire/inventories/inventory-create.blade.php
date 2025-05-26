<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Create Inventory') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Form for create new Inventory ') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

<div>

    <a href="{{ route('inventories.index') }}"
    class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-700 rounded-lg">Back to Inventories</a>


<div class="mb-5">
    
    <form wire:submit="submit" class="mt-5 space-y-5 w-150" >
        {{-- <flux:input wire:model="product_id" label="Product ID" placeholder="Product ID" /> --}}
       


    <flux:label>Product Name</flux:label>
       <select wire:model="selectedProductId" id="product" class="border rounded bg-gray-600 w-full p-2">
        <option value="" class="bg-white dark:bg-gray-300 text-gray-400 dark:text-gray-400">Select Product Name</option>
        @foreach($products as $product)
            <option value="{{ $product->product_name }}" class="bg-white dark:bg-gray-600 text-gray-800 dark:text-gray-200 hover:bg-gray-900 dark:hover:bg-gray-700">
                {{ $product->product_name }}
            </option>
        @endforeach     
    </select>
       

    <flux:label>Warehouse Name</flux:label>
    <select wire:model="selectedWarehouseId" id="warehouse" class="border rounded bg-gray-600 w-full p-2">
        <option value="" class="bg-white dark:bg-gray-300 text-gray-400 dark:text-gray-400">Select Warehouse Name</option>
        @foreach($warehouses as $warehouse)
            <option value="{{ $warehouse->name }}" class="bg-white dark:bg-gray-600 text-gray-800 dark:text-gray-200 hover:bg-gray-900 dark:hover:bg-gray-700">
                {{ $warehouse->name }}
            </option>
        @endforeach
    </select>
       
        {{-- <flux:input wire:model="warehouse_id" label="Warehouse ID" placeholder="Warehouse ID" /> --}}
        <flux:input wire:model="quantity" label="Quantity" placeholder="Quantity" />
        <flux:input type="date" wire:model="last_updated" label="Last Updated" placeholder="Last Updated" />


        <flux:button type="submit" variant="primary">Create</flux:button>
    </form>
    
</div>


</div>

</div>
