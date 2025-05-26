<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Create Product') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Form for create new Product ') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div>

        <a href="{{ route('products.index') }}"
            class="cursor-pointer mb-4 px-3 py-2 text-xs font-medium text-white bg-blue-600 rounded-lg">Back to
            Product</a>

        <div class="w-150">
    <form wire:submit="submit" class="mt-6 space-y-6">
    <flux:input wire:model="product_name" placeholder="Product Name" />
    <flux:input wire:model="product_sku" placeholder="Product SKU" />
    
    <!-- Remove the category_id input field and keep only the dropdown -->
    <select wire:model="selectedcategoryName" id="productcategory" class="border rounded bg-gray-200 w-full p-2">
        <option value="" class="bg-white dark:bg-gray-300 text-gray-400 dark:text-gray-400">Product Category Name</option>
        @foreach($productcategories as $productcategory)
            <option value="{{ $productcategory->name }}" class="bg-white dark:bg-gray-600 text-gray-800 dark:text-gray-200 hover:bg-gray-900 dark:hover:bg-gray-700">
                {{ $productcategory->name }}
            </option>
        @endforeach
    </select>


    <flux:textarea wire:model="description" placeholder="Product Description" />
    <flux:input wire:model="unit" placeholder="Product Unit of Measurment" />
    <flux:input wire:model="cost_price" placeholder="Product Cost_Price" />
    <flux:input wire:model="selling_price" placeholder="Product Selling_Price" />
    <flux:input type="date" wire:model="exp_date" label="Exp_Date" placeholder="Product Exp_date" />
    <flux:input wire:model="reorder_level" placeholder="Product Reorder_Level" />
    <flux:input wire:model="barcode_QR" placeholder="Product Barcode_QR" />
    <flux:input type="date" wire:model="reg_date" label="Reg_Date" placeholder="Product Reg_Date" />

    <flux:button type="submit" variant="primary" class="mt-5">Create</flux:button>
</form>
                
        </div>






    </div>

</div>