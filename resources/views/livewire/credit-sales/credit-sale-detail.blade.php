<div clss="w-full">
    <x-slot name="header">
         <div class="flex justify-end gap-4">
            <h2 class="font-semibold text-xl text-gray-200 leading-tight mr-auto">
                {{ __('Credit Sale Dashboard')}} - #{{ $order->id }}
            </h2>

            <button class="hover:text-cyan-600" id="print">
                <span class="sr-only">Print statement</span>
                <x-heroicon-o-printer class="size-6" />
            </button>
        </div>
    </x-slot>

    <div class="hidden print:block pb-4 pt-2">
        <livewire:utils.docs-header />
    </div>

    <section class="grid grid-cols-1 lg:grid-cols-2 gap-6 pb-8">
        <div class="space-y-6">
            <div class="md__table_wrapper" wire:lazy>
                <table class="md_table">
                    <tr class="md_tr">
                        <th class="md__th text-left">{{__('Customer')}}</th>
                        <td class="md__td w-full text-right">{{ $order?->customer?->name ?? '-'}}</td>
                    </tr>
                    <tr class="md_tr">
                        <th class="md__th text-left">{{ __('Status')}}</th>
                        <td class="md__td flex justify-end">
                            @if ($order->due_date < today())
                                <x-status-badge variant="danger">{{ __('Overdue')}}</x-status-badge>
                            @else
                                <x-status-badge variant="warning">{{ __('Due')}}</x-status-badge>
                            @endif
                        </td>
                    </tr>
                    <tr class="md_tr">
                        <th class="md__th text-left">{{ __('Due on')}}</th>
                        <td class="md__td text-right">{{ date('d/m/Y', strtotime($order->due_date))}}</td>
                    </tr>
                    <tr class="md_tr">
                        <th class="md__th text-left">{{ __('Total price')}}</th>
                        <td class="md__td text-right">{{ number_format($order->order_items_sum_total, 2)}}</td>
                    </tr>
                    <tr class="md_tr">
                        <th class="md__th text-left">{{ __('Paid amount')}}</th>
                        <td class="md__td text-right">{{ number_format(0, 2)}}</td>
                    </tr>
                </table>
            </div>

            <div class="flex items-end gap-4 print:hidden">
                <div class="space-y-1.5 w-full">
                    <x-input-label for="amount" value="{{ __('Amount received') }}" />
                    <x-text-input
                        wire:model.live.debounce.2000ms="amount"
                        id="amount"
                        name="amount"
                        type="number"
                        class="mt-1 block w-full"
                        placeholder="{{ __('') }}"
                        required
                    />
                    <x-input-error :messages="$errors->get('amount')" class="mt-2" />
                </div>
                <div>
                    <x-primary-button wire:click="payDebt">{{__('Save')}}</x-primary-button>
                </div>
            </div>

            <div>
                <p class="text-white bg-gray-600 p-2">Payment statement</p>
                <table class="md__table">
                    <thead class="md__thead">
                        <tr>
                            <th class="md__th text-left">{{__('Date')}}</th>
                            <th class="md__th text-left">{{__('Amount')}}</th>
                            <th class="md__th text-left">{{ __('Receiver')}}</th>
                        </tr>
                    </thead>
                    <tbody class="md__tbody">
                        <tr class="md__tr">
                            <td class="md__td">5-08-2024</td>
                            <td class="md__td">{{ number_format(50000, 2)}}</td>
                            <td class="md__td">{{ auth()->user()->name}}</td>
                        </tr>
                        <tr class="md__tr">
                            <td class="md__td">5-08-2024</td>
                            <td class="md__td">{{ number_format(50000, 2)}}</td>
                            <td class="md__td">{{ auth()->user()->name}}</td>
                        </tr>
                        <tr class="md__tr">
                            <td class="md__td">5-08-2024</td>
                            <td class="md__td">{{ number_format(50000, 2)}}</td>
                            <td class="md__td">{{ auth()->user()->name}}</td>
                        </tr>
                        <tr class="md__tr">
                            <td class="md__td">5-08-2024</td>
                            <td class="md__td">{{ number_format(50000, 2)}}</td>
                            <td class="md__td">{{ auth()->user()->name}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="print:hidden space-y-6 lg:border-l dark:border-gray-800">
            <div>
                <p class="text-white bg-gray-600 p-2 -mb-4">Products sold</p>
                <div class="md__table_wrapper" wire:lazy>
                    <table class="md__table">
                        <thead class="md__thead">
                            <tr>
                                <th class="md__th md__th1"></th>
                                <th class="md__th text-left">{{__('Product')}}</th>
                                <th class="md__th text-left">{{__('Qty')}}</th>
                                <th class="md__th text-left">{{ __('price')}}</th>
                            </tr>
                        </thead>
                        <tbody class="md__tbody">
                            @php $rowId = 1; @endphp
                            @foreach ($order->orderItems as $item)
                                <tr class="md__tr" wire:key="$tem->id">
                                    <td class="md__td md__td1">{{ $rowId++ }}</td>
                                    <td class="md__td">{{ $item?->product?->name ?? "-"}}</td>
                                    <td class="md__td">{{ number_format($item->qty, 2)}}</td>
                                    <td class="md__td">{{ number_format($item->total, 2)}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    @script
    <script>
        const printBtn = document.getElementById('print')

        printBtn.addEventListener('click', () => {
            print()
        })
    </script>
    @endscript
    
</div>