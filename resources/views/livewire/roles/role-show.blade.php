<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Show Role') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Show registerd role ') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div>

        <a href="{{ route('roles.index') }}"
            class="cursor-pointer mb-4 px-3 py-2 text-xs font-medium text-white bg-blue-600 rounded-lg">Back to Role</a>

        <div class="w-150">
            <p class='mt-2'><strong>ID: </strong>{{ $role->id }}</p>
            <p class='mt-2'><strong>Name: </strong>{{ $role->name }}</p>
            <p class='mt-2'><strong>Permissions: </strong>
                @if ($role->permissions)
                    @foreach ($role->permissions as $permission)
                        <flux:badge class="mb-1">{{ $permission->name }}</flux:badge>
                    @endforeach
                @endif
            </p>

        </div>

    </div>

</div>