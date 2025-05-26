@props(['on'])

<div
    x-data="{ showToast: false, timeout: null }"
    x-init="@this.on('{{ $on }}', () => {
        clearTimeout(timeout);
        showToast = true;
        timeout = setTimeout(() => showToast = false, 3000);
    })"
    x-show="showToast"
    x-show.transition.out.opacity.duration.150ms
    x-transition:leave.opacity.duration.150ms
    style="display: none;"
    {{ $attributes->merge(['class' => 'fixed bottom-5 right-5 bg-green-600 text-white text-sm p-4 rounded-lg shadow-md']) }}
>
    <p>{{ $slot }}</P>
</div>