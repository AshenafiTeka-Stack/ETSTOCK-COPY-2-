<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Create Role') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Form for create new Role ') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div>

        <a href="{{ route('roles.index') }}"
            class="cursor-pointer mb-4 px-3 py-2 text-xs font-medium text-white bg-blue-600 rounded-lg">Back to Role</a>

        <div class="w-150">
            <form wire:submit="submit" class="mt-6 space-y-6">
                <flux:input wire:model="name" label="Name" placeholder="Name" />

                <flux:checkbox.group wire:model="permissions" label="Permissions">
               
                @foreach ( $allPermissions as $permissions )
                <flux:checkbox label="{{ $permissions->name }}" value="{{ $permissions->name }}"  />
                @endforeach

                </flux:checkbox.group>

                <flux:button type="submit" variant="primary">Create</flux:button>
            </form>
        </div>

    </div>

</div>