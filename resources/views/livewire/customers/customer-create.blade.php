<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Create Customer') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Form for create new customer ') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

<div>

    <a href="{{ route('customers.index') }}"
    class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-700 rounded-lg">Back to Customers</a>


<div class="mb-5">
    <form wire:submit="submit" class="mt-5 space-y-5 w-150" >
        <flux:input wire:model="name" label="Name" placeholder="Customer Name" />
        <flux:input wire:model="email" label="Email" placeholder="Customer Email" />
        <flux:input wire:model="phone" label="Phone" placeholder="Customer Phone" />

        <flux:textarea wire:model="address" label="Address" placeholder="Customer address" />

        <flux:button type="submit" variant="primary">Create</flux:button>
    </form>
    
</div>


</div>

</div>
