
    <!-- resources/views/livewire/product-counter.blade.php -->
<div class="bg-white rounded-lg shadow p-6">
    <h3 class="text-lg font-medium text-gray-900 mb-2">Total Products Registered</h3>
    <div class="text-3xl font-bold text-indigo-600">{{ $totalProducts }}</div>
    <p class="text-sm text-gray-500 mt-1">As of {{ now()->format('M d, Y') }}</p>
</div>

