<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('PO Items') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Manage all your Purchase Order Items') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

<div>

   @session('success')
       <div class="flex items-center p-2 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-green-900 dark:text-green-300 dark:border-green-800" role="alert">
           <svg class="flex-shrink-0 w-8 h-8 mr-1 text-green-700 dark:text-green-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"></path>
           </svg>
           <span class="font-medium"> {{ $value }} </span>
       </div>
   @endsession

    <a href="{{ route('poitems.create') }}"
    class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-700 rounded-lg">Create POItems</a>


<div class="mt-4 overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">ID</th>
            <th scope="col" class="px-6 py-3">Purchase Order ID</th>
            <th scope="col" class="px-6 py-3">Product Name</th>
            <th scope="col" class="px-6 py-3 ">Qunatity</th>
            <th scope="col" class="px-6 py-3 ">Unit_Price</th>
            <th scope="col" class="px-6 py-3 ">Actions</th>



        </tr>
        </thead>
        <tbody>

            @foreach ($poitems as $poitem )
                
        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
            <td class="px-6 py-2 font-medium text-gray-900 dark:text-white">{{ $poitem->id }}</td>
            <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $poitem->po_id }}</td>
            <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $poitem->product_id }}</td>
            <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $poitem->quantity }}</td>
            <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $poitem->unit_price }}</td>
           
            <td class="px-6 py-2 flex gap-2">
                
                <a href="{{ route('poitems.show', $poitem->id) }}"
                    class="mr-1   cursor-pointer px-3 py-2 text-xs font-medium text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-700  dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Show
                </a>

                <a href="{{ route('poitems.edit', $poitem->id) }}"
                    class="mr-1 cursor-pointer px-3 py-2 text-xs font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Edit
                </a>

                <button wire:click="delete({{ $poitem->id }})"
                    wire:confirm="Are you sure, you want to remove this purchase order item?"
                    class="  cursor-pointer px-3 py-2 text-xs font-medium text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 ">
                    Delete
                </button>

            </td>
        </tr>

        @endforeach

        </tbody>
    </table>
</div>
</div>

</div>
