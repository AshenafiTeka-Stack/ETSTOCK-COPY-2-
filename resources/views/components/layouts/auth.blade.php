{{-- <x-layouts.auth.simple :title="$title ?? null">
    {{ $slot }}
</x-layouts.auth.simple> --}}

<x-layouts.auth.split :title="$title ?? null">
    {{ $slot }}
</x-layouts.auth.split>

{{-- <x-layouts.auth.card :title="$title ?? null">
    {{ $slot }}
</x-layouts.auth.card> --}}
