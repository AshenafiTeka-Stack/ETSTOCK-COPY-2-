<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Edit Warehouse') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Form for edit warehouse ') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

<div>

    <a href="{{ route('warehouses.index') }}"
    class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-700 rounded-lg">Back to Warehouses</a>


<div class="mb-5">
    <form wire:submit="submit" class="mt-5 space-y-5 w-150" >
        <flux:input wire:model="name" label="Name" placeholder="Category Name" />
        <flux:textarea wire:model="location" label="Location" placeholder="Location" />
        <flux:input wire:model="contact_person" label="Contact_Person" placeholder="Contact Person" />

        <flux:button type="submit" variant="primary">Update</flux:button>
    </form>
    
</div>


</div>

</div>
