<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Edit Sales Order') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Form for edit Sales Order ') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

<div>

    <a href="{{ route('salesorders.index') }}"
    class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-700 rounded-lg">Back to Sales Orders</a>


<div class="mb-5">
    <form wire:submit="submit" class="mt-5 space-y-5 w-150" >
        <flux:input wire:model="customer_id" label="Customer ID" placeholder="Customer ID" />
        <flux:input type="date" wire:model="order_date" label="Order Date" placeholder="Order Date" />
        <flux:input wire:model="status" label="Satatus" placeholder="Satatus" />
        <flux:input wire:model="total_amount" label="Total Amount" placeholder="Total Amount" />

        <flux:button type="submit" variant="primary">Update</flux:button>
    </form>
    
</div>


</div>

</div>
