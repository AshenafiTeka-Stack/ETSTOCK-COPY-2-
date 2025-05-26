<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Edit User') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Form for editing registerd User ') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div>

        <a href="{{ route('users.index') }}"
            class="cursor-pointer mb-4 px-3 py-2 text-xs font-medium text-white bg-blue-600 rounded-lg">Back to User</a>

        <div class="w-150">
            <form wire:submit="submit" class="mt-6 space-y-6">
                <flux:input wire:model="name" label="Name" placeholder="Name" />
                <flux:input wire:model="email" label="Email" type="email" placeholder="Email" />
                <flux:input wire:model="password" label="Password" type='password' placeholder="Password" />
                <flux:input wire:model="confirm_password" label="Confirm Password" type='password'
                    placeholder="Confirm Password" />

                    <flux:checkbox.group wire:model="roles" label="Roles">
                        @foreach ( $allRoles as $role )
                        <flux:checkbox label="{{ $role->name }}" value="{{ $role->name }}"  />
                        @endforeach
                        </flux:checkbox.group>
                        
                <flux:button type="submit" variant="primary">Update</flux:button>
            </form>
        </div>

    </div>

</div>
