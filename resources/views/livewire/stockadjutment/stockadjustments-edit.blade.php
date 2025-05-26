<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Edit Stock Adjustment') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Form for edit stock adjustment ') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

<div>

    <a href="{{ route('stockadjustments.index') }}"
    class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-700 rounded-lg">Back to stock adjustments</a>


<div class="mb-5">
    <form wire:submit="submit" class="mt-5 space-y-5 w-150" >
        <flux:input wire:model="product_id" label="Product ID" placeholder="Product ID" />        
        <flux:input wire:model="warehouse_id" label="Warehouse ID " placeholder="Warehouse ID" />
        <flux:input wire:model="adjustment_type" label="Adjustment Type" placeholder="Adjustment Type" />
        <flux:input wire:model="quantity" label="Quantity" placeholder="Quantity " />
        <flux:textarea wire:model="reason" label="Reason" placeholder="Reason" />
        <flux:input wire:model="adjusted_by" label="Adjusted By" placeholder="adjusted By" />

        
        <flux:button type="submit" variant="primary">Update</flux:button>
    </form>
    
</div>


</div>

</div>
