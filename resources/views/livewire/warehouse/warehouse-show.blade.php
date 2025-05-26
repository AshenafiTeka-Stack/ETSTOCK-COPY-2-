<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Show Warehouse') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Show registerd warehouse ') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div>

        <a href="{{ route('warehouses.index') }}"
            class="cursor-pointer mb-4 px-3 py-2 text-xs font-medium text-white bg-blue-600 rounded-lg">Back to Warehouse</a>

        <div class="w-150">
            <p class='mt-2'><strong>ID: </strong>{{ $warehouse->id }}</p>
            <p class='mt-2'><strong>Name: </strong>{{ $warehouse->name }}</p>
            <p class='mt-2'><strong>Location: </strong>{{ $warehouse->location }}</p>
            <p class='mt-2'><strong>Contact Person: </strong>{{ $warehouse->contact_person }}</p>

        </div>

    </div>

</div>
