<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Show Purchase Order') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Show registerd Purhase Order ') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div>

        <a href="{{ route('porders.index') }}"
            class="cursor-pointer mb-4 px-3 py-2 text-xs font-medium text-white bg-blue-600 rounded-lg">Back to Purchase Orders</a>

        <div class="w-150">
            <p class='mt-2'><strong>ID: </strong>{{ $porder->id }}</p>
            <p class='mt-2'><strong>Purchase Order ID: </strong>{{ $porder->supplier_id }}</p>
            <p class='mt-2'><strong>Product ID: </strong>{{ $porder->order_date }}</p>
            <p class='mt-2'><strong>Qunatity: </strong>{{ $porder->status }}</p>
            <p class='mt-2'><strong>Unit Price: </strong>{{ $porder->total_amount }}</p>

        </div>

    </div>

</div>