<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Edit Supplier') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Form for edit supplier ') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

<div>

    <a href="{{ route('suppliers.index') }}"
    class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-700 rounded-lg">Back to suppliers</a>


<div class="mb-5">
    <form wire:submit="submit" class="mt-5 space-y-5 w-150" >
        <flux:input wire:model="name" label="Name" placeholder="Supplier Name" />        
        <flux:input wire:model="contact_person" label="Contact Person" placeholder="Supplier Contact Person" />
        <flux:input wire:model="email" label="Email" placeholder="Supplier Email" />
        <flux:input wire:model="phone" label="Phone" placeholder="Supplier Phone" />
        <flux:textarea wire:model="address" label="Address" placeholder="Customer Address" />
        
        <flux:button type="submit" variant="primary">Update</flux:button>
    </form>
    
</div>


</div>

</div>
