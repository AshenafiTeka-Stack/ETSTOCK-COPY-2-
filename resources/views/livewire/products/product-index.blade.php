<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Products') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Manage all your Products ') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div>

        @session('success')
            <div class="flex items-center p-2 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-green-900 dark:text-green-300 dark:border-green-800"
                role="alert">
                <svg class="flex-shrink-0 w-8 h-8 mr-1 text-green-700 dark:text-green-300" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"></path>
                </svg>
                <span class="font-medium"> {{ $value }} </span>
            </div>
        @endsession

        {{-- @can('product.create') --}}
        <a href="{{ route('products.create') }}"
            class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-700 rounded-lg">Create Product</a>
        {{-- @endcan --}}

        <div class="overflow-x-auto mt-4">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Product ID</th>
                        <th scope="col" class="px-6 py-3">Product Name</th>
                        <th scope="col" class="px-6 py-3">Product SKU</th>
                        <th scope="col" class="px-6 py-3">Product Category</th>
                        <th scope="col" class="px-6 py-3">Description</th>
                        <th scope="col" class="px-6 py-3">Unit</th>
                        <th scope="col" class="px-6 py-3">Cost_Price</th>
                        <th scope="col" class="px-6 py-3">Selling_Price</th>
                        <th scope="col" class="px-6 py-3">Exp_Date</th>
                        <th scope="col" class="px-6 py-3">Reorder_Level</th>                       
                        <th scope="col" class="px-6 py-3">Barcode/QR</th>
                        <th scope="col" class="px-6 py-3">Reg_Date</th>
                        <th scope="col" class="px-6 py-3 w-80">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                            <td class="px-6 py-2 font-medium text-gray-900 dark:text-white">{{ $product->product_id }}</td>
                            <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $product->product_name }}</td>
                            <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $product->product_sku }}</td>
                            <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $product->category_id }}</td>
                            <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $product->description }}</td>
                            <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $product->unit }}</td>
                            <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $product->cost_price }}</td>
                            <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $product->selling_price }}</td>
                            <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $product->exp_date }}</td>
                            <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $product->reorder_level }}</td>
                            <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $product->barcode_QR }}</td>
                            <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $product->reg_date }}</td>


                            <td class="px-6 py-2 flex gap-2">
                                
                                {{-- {{-- @can('product.view') --}}
                                <a href="{{ route('products.show', $product->product_id) }}"
                                    class="   cursor-pointer px-3 py-2 text-xs font-medium text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-700  dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    Show
                                </a>
                                {{-- @endcan --}} 

                                {{-- @can('product.edit') --}}
                                <a href="{{ route('products.edit', $product->product_id) }}"
                                    class=" cursor-pointer px-3 py-2 text-xs font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Edit
                                </a>
                                {{-- @endcan --}}

                                {{-- @can('product.delete') --}}
                                <button wire:click="delete({{ $product->product_id }})"
                                    wire:confirm="Are you sure, you want to remove this product?"
                                    class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 ">
                                    Delete
                                </button>
                                {{-- @endcan --}}
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination Links -->
            <div class="mt-4 flex justify-center">
                {{ $products->links() }}
            </div>


        </div>


    </div>



</div>
