<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Sales Orders ') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Manage all your Sales Orders') }}</flux:subheading>
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

    <a href="{{ route('salesorders.create') }}"
    class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-700 rounded-lg">Create Sales Order</a>


<div class="mt-4 overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">ID</th>
            <th scope="col" class="px-6 py-3">Customer ID</th>
            <th scope="col" class="px-6 py-3">Order Date</th>
            <th scope="col" class="px-6 py-3 ">Status</th>
            <th scope="col" class="px-6 py-3 ">Total Amount</th>
            <th scope="col" class="px-6 py-3 ">Actions</th>



        </tr>
        </thead>
        <tbody>

            @foreach ($salesorders as $salesorder )
                
        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
            <td class="px-6 py-2 font-medium text-gray-900 dark:text-white">{{ $salesorder->id }}</td>
            <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $salesorder->customer_id }}</td>
            <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $salesorder->order_date }}</td>
            <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $salesorder->status }}</td>
            <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $salesorder->total_amount }}</td>
           
            <td class="px-6 py-2 flex gap-2">
                
                <a href="{{ route('salesorders.show', $salesorder->id) }}"
                    class="mr-1   cursor-pointer px-3 py-2 text-xs font-medium text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-700  dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Show
                </a>

                <a href="{{ route('salesorders.edit', $salesorder->id) }}"
                    class="mr-1 cursor-pointer px-3 py-2 text-xs font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Edit
                </a>

                <button wire:click="delete({{ $salesorder->id }})"
                    wire:confirm="Are you sure, you want to remove this sales order?"
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
