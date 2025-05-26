<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Edit Product') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Form for edit Product ') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div>

        <a href="{{ route('products.index') }}"
            class="cursor-pointer mb-4 px-3 py-2 text-xs font-medium text-white bg-blue-600 rounded-lg">Back to Product</a>

        <div class="w-150">
            <form wire:submit="submit" class="mt-6 space-y-6">
                <flux:input wire:model="product_name" label="Name" placeholder="Product Name" />
                <flux:input wire:model="product_sku" label="Product SKU" placeholder="Product SKU" />
                <flux:input wire:model="category_id" label="Category_ID" placeholder="Product Category_ID" />
                <flux:textarea wire:model="description" label="Description" placeholder="Product Description" />
                <flux:input wire:model="unit" label="Unit of Measurement" placeholder="Product Unit of Measurment" />
                <flux:input wire:model="cost_price" label="Cost_Price" placeholder="Product Cost_Price" />
                <flux:input wire:model="selling_price" label="Selling_Price" placeholder="Product Selling_Price" />
                <flux:input type="date" wire:model="exp_date" label="Exp_Date" placeholder="Product Exp_date" />
                <flux:input wire:model="reorder_level" label="Rorder_Level" placeholder="Product Reorder_Level" />
                <flux:input wire:model="barcode_QR" label="Barcode_QR" placeholder="Product Barcode_QR" />
                <flux:input type="date" wire:model="reg_date" label="Reg_Date" placeholder="Product Reg_Date" />

                <flux:button type="submit" variant="primary">Update</flux:button>
            </form>
        </div>

    </div>

</div>
