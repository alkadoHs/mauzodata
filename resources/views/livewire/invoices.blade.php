<div clss="w-full">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Invoices')}}
        </h2>
    </x-slot>

    <section>
        <div class="sm:px-6 lg:px-4 space-y-6">
            <div class="my-2 space-y-4">
                <div class="flex justify-between gap-4">
                    <x-text-input type="search" name="search" wire:model.live.debounce.1000ms="search" placeholder="Search invoice ..." />
                    
                    {{--<livewire:invoices.create-invoice />--}}
                </div>
        
                <div class="grid grid-cols-1 lg:grid-cols-2 justify-between gap-4">
                    <div class="flex shrink-0 items-center gap-3 overflow-y-auto whitespace-nowrap">
                        <button class="rounded-2xl cursor-pointer select-none dark:text-gray-950 bg-green-400 px-4 py-1 text-sm">
                        All. {{ number_format($total) }}
                        </button>
                        <x-filter-tab variant="warning" wire:lazy>pending. {{ number_format($pending) }}</x-filter-tab>
                        <x-filter-tab variant="danger" wire:lazy>credit. {{ number_format($credit) }}</x-filter-tab>
                    </div>

                    <div class="flex items-center shrink-0 gap-4 lg:justify-end">
                        <x-secondary-button>Switch barnch</x-secondary-button>
                        

                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <x-icon-button class="p-0.5" title="{{ __('Import invoices from another branch')}}">
                                    <x-heroicon-o-folder-arrow-down class="size-6" />
                                </x-icon-button>
                            </x-slot>

                            <x-slot name="content">
                                <button>
                                    <x-dropdown-link class="w-full text-start" >
                                        <x-heroicon-m-arrow-right-circle class="size-4 mr-2" />
                                        {{ __('Import from branch') }}
                                    </x-dropdown-link>
                                </button>

                                <!-- Authentication -->
                                <button wire:confirm="We are working on this feature." class="w-full text-start">
                                    <x-dropdown-link>
                                        <x-heroicon-m-document-text class="size-4 text-teal-400 mr-2" />
                                        {{ __('Import from excel') }}
                                    </x-dropdown-link>
                                </button>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
            </div>
            <div class="relative max-h-dvh mt-4 space-y-4 bg-white dark:bg-gray-100/10 overflow-auto whitespace-nowrap" wire:lazy>
                <table class="w-full border-collapse border dark:border-gray-700">
                    <thead class="dark:text-gray-300">
                        <tr class=" z-10">
                            <th class="p-2 text-xs text-left uppercase border dark:border-gray-700  bg-white dark:bg-gray-800 sticky left-0 top-0 z-20">S/N</th>
                            <th class="p-2 text-xs text-left uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('Invoice')}}</th>
                            <th class="p-2 text-xs text-left uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('Total')}}</th>
                            <th class="p-2 text-xs text-left uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('Status')}}</th>
                            <th class="p-2 text-xs text-left uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('Customer')}}</th>
                            <th class="p-2 text-xs text-left uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('Issued on')}}</th>
                            <th class="p-2 text-xs text-left uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('Seller')}}</th>
                            <th class="p-2 text-xs text-left uppercase border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">{{__('Payment method')}}</th>
                            <th class="p-2 text-xs text-left border dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 dark:text-gray-400">
                        @php
                        $rowId = 1;
                        @endphp
                        @foreach ($this->invoices as $invoice)
                            <tr wire:key="{{ $invoice->id }}" class="transition-colors hover:bg-gray-200/90 dark:hover:bg-gray-700/50 data-[state=selected]:bg-gray-100/50">
                                <td class="p-2 text-sm border dark:border-gray-700 bg-white dark:bg-gray-800 sticky left-0"">{{ $rowId++ }}</td>
                                <td class="p-2 text-sm text-teal-600 border dark:border-gray-700">{{ $invoice->id < 100 ? "#00$invoice->id": "#{$invoice->id}" }}</td>
                                <td class="p-2 text-sm border dark:border-gray-700">{{ number_format($invoice->order_items_sum_total, 2) }}</td>
                                @if ($invoice->status == 'paid')
                                    <td class="p-2 text-sm text-left border dark:border-gray-700">
                                      <x-status-badge variant="success">{{ $invoice->status }}</x-status-badge>
                                    </td>
                                @elseif($invoice->status == 'pending')
                                    <td class="p-2 text-sm text-left border dark:border-gray-700">
                                      <x-status-badge variant="warning">{{ $invoice->status }}</x-status-badge>
                                    </td>
                                @else
                                    <td class="p-2 text-sm text-left border dark:border-gray-700">
                                      <x-status-badge variant="danger">{{ $invoice->status }}</x-status-badge>
                                    </td>
                                @endif
                                <td class="p-2 text-sm text-left border dark:border-gray-700">{{ $invoice?->customer?->name ?? '-' }}</td>
                                <td class="p-2 text-sm text-left border dark:border-gray-700">{{ date('d/m/Y H:m', strtotime($invoice->created_at)) }}</td>
                                <td class="p-2 text-sm text-left border dark:border-gray-700">{{ $invoice?->user?->name }}</td>
                                <td class="p-2 text-sm text-left border dark:border-gray-700 uppercase">{{ $invoice?->paymentMethod?->name }}</td>
                                <td class="p-2 text-sm border dark:border-gray-700">
                                    <div class="flex items-center gap-3">
                                        <button class="flex items-center gap-1"
                                        >
                                            <x-heroicon-o-eye class="size-5 text-teal-500" />
                                            <span class="text-xs">View</span>
                                        </button>
                                        <button wire:click="deleteinvoice({{$invoice->id}})" 
                                                wire:confirm.prompt="Are you sure that you want to delete - {{ $invoice->name }}?\n\nType DELETE to confirm|DELETE"
                                        >
                                            <x-heroicon-o-trash class="size-5 text-red-500" />
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
                @empty($this->invoices->items())
                <x-empty>{{__('No invoices found!')}}</x-empty>
                @endempty
            </div>
            <div class="my-2">
                {{ $this->invoices->links()}}
            </div>
        </div>
    </section>
</div>

