<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Show POItem') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Show registerd POItem ') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div>

        <a href="{{ route('poitems.index') }}"
            class="cursor-pointer mb-4 px-3 py-2 text-xs font-medium text-white bg-blue-600 rounded-lg">Back to POItems</a>

        <div class="w-150">
            <p class='mt-2'><strong>ID: </strong>{{ $poitem->id }}</p>
            <p class='mt-2'><strong>Purchase Order ID: </strong>{{ $poitem->po_id }}</p>
            <p class='mt-2'><strong>Product ID: </strong>{{ $poitem->product_id }}</p>
            <p class='mt-2'><strong>Qunatity: </strong>{{ $poitem->quantity }}</p>
            <p class='mt-2'><strong>Unit Price: </strong>{{ $poitem->unit_price }}</p>

        </div>

    </div>

</div>