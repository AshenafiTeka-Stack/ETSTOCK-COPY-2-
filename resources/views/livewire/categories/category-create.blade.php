<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Create Product Category') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Form for create new product category ') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

<div>

    <a href="{{ route('categories.index') }}"
    class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-700 rounded-lg">Back to Categories</a>


<div class="mb-5">
    <form wire:submit="submit" class="mt-5 space-y-5 w-150" >
        <flux:input wire:model="name" label="Name" placeholder="Category Name" />
        <flux:textarea wire:model="description" label="Description" placeholder="Category Description" />

        <flux:button type="submit" variant="primary">Create</flux:button>
    </form>
    
</div>


</div>

</div>
