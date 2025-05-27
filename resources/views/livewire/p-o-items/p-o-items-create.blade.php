<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Create POItem') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Form for create new purchase order item ') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

<div>

    <a href="{{ route('customers.index') }}"
    class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-700 rounded-lg">Back to POItems</a>


<div class="mb-5">
    <form wire:submit="submit" class="mt-5 space-y-5 w-150" >
        {{-- <flux:input wire:model="po_id" label="PO_ID" placeholder="Purchase Order ID" /> 
        <flux:input wire:model="product_id" label="Product_ID" placeholder="Product ID" /> --}}

        <flux:label>Purchase Order ID</flux:label>
       <select wire:model="selectedporderId" id="p_orders" class="border rounded bg-gray-600 w-full p-2">
        <option value="" class="bg-white dark:bg-gray-300 text-gray-400 dark:text-gray-400">Select Purchase Order ID</option>
        @foreach($p_orders as $p_order)
            <option value="{{ $p_order->id }}" class="bg-white dark:bg-gray-600 text-gray-800 dark:text-gray-200 hover:bg-gray-900 dark:hover:bg-gray-700">
                [{{ $p_order->id }}] - {{ $p_order->supplier_id }}
            </option>
        @endforeach     
    </select>

     <flux:label>Product Name</flux:label>
    <select wire:model="selectedproductName" id="products" class="border rounded bg-gray-600 w-full p-2">
        <option value="" class="bg-white dark:bg-gray-300 text-gray-400 dark:text-gray-400">Select Propduct Name</option>
        @foreach($products as $product)
            <option value="{{ $product->product_name }}" class="bg-white dark:bg-gray-600 text-gray-800 dark:text-gray-200 hover:bg-gray-900 dark:hover:bg-gray-700">
                {{ $product->product_name }}
            </option>
        @endforeach
    </select>


        <flux:input wire:model="quantity" label="Qunatity" placeholder="Quntity" />
        <flux:input wire:model="unit_price" label="Unit Price" placeholder="Unit Price" />



        <flux:button type="submit" variant="primary">Create</flux:button>

    </form>
    
</div>



</div>

</div>
