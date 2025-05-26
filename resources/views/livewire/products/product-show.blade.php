<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Show Product') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Show registerd Product ') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div>

        <a href="{{ route('products.index') }}"
            class="cursor-pointer mb-4 px-3 py-2 text-xs font-medium text-white bg-blue-600 rounded-lg">Back to Product</a>

        <div class="w-150">
            <p class='mt-2'><strong>Product ID: </strong>{{ $product->product_id }}</p>
            <p class='mt-2'><strong>Product Name: </strong>{{ $product->product_name }}</p>
            <p class='mt-2'><strong>Product SKU: </strong>{{ $product->product_sku }}</p>
            <p class='mt-2'><strong>Product Category ID: </strong>{{ $product->category_id }}</p>
            <p class='mt-2'><strong>Product Description: </strong>{{ $product->description }}</p>
            <p class='mt-2'><strong>Product UOM: </strong>{{ $product->unit }}</p>
            <p class='mt-2'><strong>Product Cost_Price: </strong>{{ $product->cost_price }}</p>
            <p class='mt-2'><strong>Product Selling_Price: </strong>{{ $product->selling_price }}</p>
            <p class='mt-2'><strong>Product Exp_Date: </strong>{{ $product->exp_date }}</p>
            <p class='mt-2'><strong>Product Re-Order Level: </strong>{{ $product->reorder_level }}</p>
            <p class='mt-2'><strong>Product Barcode / QR: </strong>{{ $product->barcode_QR }}</p>
            <p class='mt-2'><strong>Product Reg_Date: </strong>{{ $product->reg_date }}</p>


        </div>

    </div>

</div>
