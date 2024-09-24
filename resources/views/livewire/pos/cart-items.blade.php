<div class="relative max-h-dvh space-y-4 bg-white dark:bg-gray-100/10 overflow-auto whitespace-nowrap" wire:lazy>
    <table class="w-full border-collapse border dark:border-gray-700">
        <thead class="dark:text-gray-300">
            <tr class=" z-10">
                <th class="p-2 text-xs text-left uppercase border dark:border-gray-700  bg-white dark:bg-gray-800 sticky left-0 top-0 z-20">S/N</th>
                <th class="p-2 text-xs text-left uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('Product')}}</th>
                <th class="p-2 text-xs text-right uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('Qty')}}</th>
                <th class="p-2 text-xs text-right uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('Price')}}</th>
                <th class="p-2 text-xs text-right uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('Total')}}</th>
                <th class="p-2 text-xs text-right uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('Transport')}}</th>
                <th class="p-2 text-xs text-right uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('Sold by')}}</th>
                <th class="p-2 text-xs  border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0"></th>
            </tr>
        </thead>
        <tbody class="text-gray-600 dark:text-gray-400">
            @php
            $rowId = 1;
            @endphp
            @foreach ($this->cartItems as $item)
                <tr wire:key="{{ $item->id }}" class="transition-colors hover:bg-gray-200/90 dark:hover:bg-gray-700/50 data-[state=selected]:bg-gray-100/50">
                    <td class="p-1.5 text-sm border dark:border-gray-700 bg-white dark:bg-gray-800 sticky left-0">{{ $rowId++ }}</td>
                    <td class="p-1.5 text-sm border dark:border-gray-700">
                            {{ $item?->product?->name }}
                    </td>
                    <td class="p-1.5 text-sm border dark:border-gray-700">
                        <x-text-input type="number" 
                                      wire:model.live.debounce.1000ms="qty"
                                      class="max-w-20 py-0" />
                    </td>
                    <td class="p-1.5 text-sm text-right border dark:border-gray-700">{{ number_format($item->price,2 ) }}</td>
                    <td class="p-1.5 text-sm text-right border dark:border-gray-700">{{ number_format($item->price * $item->qty) }}</td>
                    <td class="p-1.5 text-sm text-right border dark:border-gray-700 uppercase">{{ number_format($item?->transport) }}</td>
                    <td class="p-1.5 text-sm text-right border dark:border-gray-700">{{ $item?->product?->whole_stock > 0 ? 'whole' : 'retail' }}</td>
                    <td class="p-1.5 text-sm text-right border dark:border-gray-700">
                        <div class="flex items-center gap-3">
                            {{--<livewire:item.edit-item :item="$item" :key="$item->id"  />--}}
                            
                            <button wire:click="deleteItem({{$item->id}})" 
                                    wire:confirm="Are you sure that you want to delete - {{ $item->product->name }}?"
                            >
                                <x-heroicon-o-trash class="size-5 text-red-500" />
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    @empty($this->cartItems())
    <x-empty>{{__('No cart items found!')}}</x-empty>
    @endempty
</div>
