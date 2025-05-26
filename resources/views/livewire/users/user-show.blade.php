<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Show User') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Show registerd User ') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div >

        <a href="{{ route('users.index') }}"
            class="cursor-pointer mb-4 px-3 py-2 text-xs font-medium text-white bg-blue-600 rounded-lg">Back to User</a>

        <div class="w-150 ">
            <p class='mt-2'><strong>ID: </strong>{{ $user->id }}</p>
            <p class='mt-2'><strong>Name: </strong>{{ $user->name }}</p>
            <p class='mt-2'><strong>Email: </strong>{{ $user->email }}</p>

        </div>

    </div>

</div>
