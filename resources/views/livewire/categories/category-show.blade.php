<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Show Product Category') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Show registerd Product Category ') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div>

        <a href="{{ route('categories.index') }}"
            class="cursor-pointer mb-4 px-3 py-2 text-xs font-medium text-white bg-blue-600 rounded-lg">Back to User</a>

        <div class="w-150">
            <p class='mt-2'><strong>ID: </strong>{{ $category->id }}</p>

            <p class='mt-2'><strong>Name: </strong>{{ $category->name }}</p>
            <p class='mt-2'><strong>Description: </strong>{{ $category->description }}</p>

        </div>

    </div>

</div>
