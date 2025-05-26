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
        <flux:input wire:model="so_id" label="Sales Order ID" placeholder="Sales Order ID" />
        <flux:input wire:model="product_id" label="Product ID" placeholder="Product ID" />
        <flux:input wire:model="quantity" label="Quantity" placeholder="Quantity" />
        <flux:input wire:model="unit_price" label="Unit Price" placeholder="Unit Price" />
    
        <flux:button type="submit" variant="primary">Create</flux:button>
    </form>
   
</div>


</div>

</div>
