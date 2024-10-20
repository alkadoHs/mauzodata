<div class="w-full">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-none">
            {{ __('My Sales') }}
        </h2>
    </x-slot>

    <div class="flex gap-2 items-center mt-2 justify-end sm:px-4 lg:px-6">
        <a href="{{ route('my-sales') }}" class="mr-auto">
            <x-secondary-button>Reload</x-secondary-button>
        </a>
        <!-- <button class="bg-cyan-600 text-white leading-tight px-4 py-2 rounded">text slah</button> -->
        <x-text-input type="date" name="from-date" wire:model.live.debounce.1000ms="from_date" />
        <span>-</span>
        <x-text-input type="date" name="to-date" wire:model.live.debounce.1000ms="to_date" />
    </div>

    <div class="py-6">
        <div class="sm:px-4 lg:px-6 grid grid-cols-3 gap-4 overflow-x-auto">
            <div class="p-4 rounded-lg space-y-4 border border-gray-200 bg-red-300/20 dark:border-gray-700">
                <p class="t font-medium leading-none">Expenses</p>
                <p class="text-xl font-medium">{{ number_format($expenses)}}</p>
            </div>

            <div class="p-4 rounded-lg space-y-4 bg-teal-700/30 dark:border-gray-700">
                <p class="t font-medium leading-none">Sales</p>
                <p class="text-xl font-medium">{{ number_format($sales)}}</p>
            </div>

            <div class="p-4 rounded-lg space-y-4 bg-teal-800/30">
                <p class="t font-medium leading-none">Net sales</p>
                <p class="text-xl font-medium">{{ number_format($sales - $expenses)}}</p>
            </div>

        </div>
    <div class="sm:px-4 lg:px-6 gap-4">
        
                <div class="md__table_wrapper">
                    <table class="md__table">
                        <thead class="md__thead">
                            <tr>
                                <th class="md__th md__th1">S/N</th>
                                <th class="md__th">Product</th>
                                <th class="md__th text-right">Qty</th>
                                <th class="md__th text-right">Total price</th>
                                <th class="md__th text-right">Date</th>
                            </tr>
                        </thead>
                        <tbody class="md__tbody">
                            @php
                            $id = 1;
                            @endphp
                            @foreach ($products as $product)
                                <tr class="md__tr" wire:key="$product->id">
                                    <td class="md__td md__td1">{{ $id++ }}</td>
                                    <td class="md__td">{{ $product->product->name }}</td>
                                    <td class="md__td text-right">{{ number_format( $product->total_qty, 2)}}</td>
                                    <td class="md__td text-right">{{ number_format($product->total_price, 2)}}</td>
                                    <td class="md__td text-right">{{ date('d/m/Y H:m', strtotime($product->latest_created_at))}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
    </div>
    </div>
</div>

