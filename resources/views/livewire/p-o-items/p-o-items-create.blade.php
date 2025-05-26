<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Create POItem') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Form for create new purchase order item ') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

<div>

    <a href="{{ route('customers.index') }}"
    class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-700 rounded-lg">Back to POItems</a>


<div class="mb-5">
    <form wire:submit="submit" class="mt-5 space-y-5 w-150" >
        <flux:input wire:model="po_id" label="PO_ID" placeholder="Purchase Order ID" /> 
        <flux:input wire:model="product_id" label="Product_ID" placeholder="Product ID" />
        <flux:input wire:model="quantity" label="Qunatity" placeholder="Quntity" />
        <flux:input wire:model="unit_price" label="Unit Price" placeholder="Unit Price" />


         {{-- <div>
    <label for="porder">Select Purchase Order Status</label> --}}
    <select wire:model="selectedPorderId" id="porder" class="border rounded w-full p-2">
        <option value="">-- Select Porder --</option>
        @foreach($porders as $porder)
            <option value="{{ $porder->id }}">{{ $porder->status }}</option>
        @endforeach
    </select>

    {{-- @if($selectedPorderId)
        <p class="mt-2 text-green-600">Selected PO Status:
            {{ $porders->find($selectedPorderId)->status ?? 'N/A' }}
        </p>
    @endif
</div> --}}

        <flux:button type="submit" variant="primary">Create</flux:button>

    </form>
    
</div>



</div>

</div>
