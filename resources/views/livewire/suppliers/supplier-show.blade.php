<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Show Supplier') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Show registerd Supplier ') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div>

        <a href="{{ route('suppliers.index') }}"
            class="cursor-pointer mb-4 px-3 py-2 text-xs font-medium text-white bg-blue-600 rounded-lg">Back to suppliers</a>

        <div class="w-150">
            <p class='mt-2'><strong>ID: </strong>{{ $supplier->id }}</p>
            <p class='mt-2'><strong>Name: </strong>{{ $supplier->name }}</p>
             <p class='mt-2'><strong>Contact Person: </strong>{{ $supplier->contact_person }}</p>
            <p class='mt-2'><strong>Email: </strong>{{ $supplier->email }}</p>
            <p class='mt-2'><strong>Address: </strong>{{ $supplier->address }}</p>
        </div>

    </div>

</div>