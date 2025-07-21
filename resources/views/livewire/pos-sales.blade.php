<!-- resources/views/livewire/pos-sales.blade.php -->
<div>
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-xl font-semibold mb-4">New POS Sale</h2>
        
        @if (session()->has('message'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('message') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Sale Information -->
            <div class="md:col-span-1">
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Sale Date</label>
                    <input type="datetime-local" wire:model="saleDate" class="w-full px-3 py-2 border rounded">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Warehouse</label>
                    <select wire:model="warehouseId" class="w-full px-3 py-2 border rounded">
                        <option value="">Select Warehouse</option>
                        @foreach($warehouses as $warehouse)
                            <option value="{{ $warehouse->id }}">{{ $warehouse->name }}</option>
                        @endforeach
                    </select>
                    @error('warehouseId') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Payment Method</label>
                    <select wire:model="paymentMethod" class="w-full px-3 py-2 border rounded">
                        @foreach($paymentMethods as $key => $method)
                            <option value="{{ $key }}">{{ $method }}</option>
                        @endforeach
                    </select>
                    @error('paymentMethod') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>

                <div class="bg-gray-100 p-4 rounded">
                    <div class="flex justify-between font-bold text-lg">
                        <span>Total:</span>
                        <span>${{ number_format($totalAmount, 2) }}</span>
                    </div>
                </div>

                <button wire:click="processSale" 
                    class="mt-4 w-full bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
                    Process Sale
                </button>
            </div>

            <!-- Product Search -->
            <div class="md:col-span-2">
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Search Products</label>
                    <div class="flex">
                        <input type="text" wire:model="searchProduct" 
                            wire:keydown.enter="searchProducts"
                            class="w-full px-3 py-2 border rounded-l" 
                            placeholder="Product name or barcode">
                        <button wire:click="searchProducts" 
                            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-r">
                            Search
                        </button>
                    </div>
                </div>

                <!-- Search Results -->
                @if(count($products) > 0)
                    <div class="mb-6">
                        <h3 class="font-semibold mb-2">Search Results</h3>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                            @foreach($products as $product)
                                <button wire:click="addToCart({{ $product->id }})"
                                    class="border p-2 rounded hover:bg-gray-100 text-left">
                                    <div class="font-medium">{{ $product->name }}</div>
                                    <div class="text-sm">${{ number_format($product->price, 2) }}</div>
                                </button>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Cart Items -->
                <div>
                    <h3 class="font-semibold mb-2">Cart Items</h3>
                    @if(count($cart) > 0)
                        <div class="border rounded overflow-hidden">
                            <table class="min-w-full">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="px-4 py-2 text-left">Product</th>
                                        <th class="px-4 py-2 text-left">Price</th>
                                        <th class="px-4 py-2 text-left">Qty</th>
                                        <th class="px-4 py-2 text-left">Total</th>
                                        <th class="px-4 py-2 text-left">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cart as $item)
                                        <tr class="border-t">
                                            <td class="px-4 py-2">{{ $item['name'] }}</td>
                                            <td class="px-4 py-2">${{ number_format($item['unit_price'], 2) }}</td>
                                            <td class="px-4 py-2">
                                                <input type="number" 
                                                    wire:change="updateCartItem({{ $item['product_id'] }})"
                                                    wire:model.lazy="cart.{{ $item['product_id'] }}.quantity"
                                                    min="1" 
                                                    class="w-16 px-2 py-1 border rounded">
                                            </td>
                                            <td class="px-4 py-2">${{ number_format($item['total_price'], 2) }}</td>
                                            <td class="px-4 py-2">
                                                <button wire:click="removeFromCart({{ $item['product_id'] }})"
                                                    class="text-red-500 hover:text-red-700">
                                                    Remove
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="text-gray-500 py-4 text-center">No items in cart</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>