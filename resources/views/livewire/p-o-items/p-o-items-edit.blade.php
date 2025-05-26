<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Edit POItem') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Form for edit POItem ') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

<div>

    <a href="{{ route('poitems.index') }}"
    class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-700 rounded-lg">Back to POItems</a>


<div class="mb-5">
    <form wire:submit="submit" class="mt-5 space-y-5 w-150" >
        <flux:input wire:model="po_id" label="PO ID" placeholder="Purchase Order ID" />
        <flux:input wire:model="product_id" label="Product ID" placeholder="Product ID" />
        <flux:input wire:model="quantity" label="Quantity" placeholder="Quantity" />
        <flux:input wire:model="unit_price" label="Unit Price" placeholder="Unit Price" />

        <flux:button type="submit" variant="primary">Update</flux:button>
    </form>
    
</div>


</div>

</div>
