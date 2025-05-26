<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Show Customer') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Show registerd Customer ') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div>

        <a href="{{ route('customers.index') }}"
            class="cursor-pointer mb-4 px-3 py-2 text-xs font-medium text-white bg-blue-600 rounded-lg">Back to Customer</a>

        <div class="w-150">
            <p class='mt-2'><strong>ID: </strong>{{ $customer->id }}</p>
            <p class='mt-2'><strong>Name: </strong>{{ $customer->name }}</p>
            <p class='mt-2'><strong>Email: </strong>{{ $customer->email }}</p>
            <p class='mt-2'><strong>Address: </strong>{{ $customer->address }}</p>
        </div>

    </div>

</div>